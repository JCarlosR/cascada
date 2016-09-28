new Vue({
    el: '#app',
    data: {
        newObjective: {
            'description': '',
            'dimension': '',
            'edit': false
        },
        objectives: []
    },
    methods: {
        submitObjective: function () {
            if (this.newObjective.edit)
                this.saveEdit();
            else
                this.addObjective();
        },
        addObjective: function () {
            var vue = this;
            this.newObjective._token = $('meta[name=csrf-token]').attr('content');

            $.ajax({
                url: './objectives',
                type: 'POST',
                data: this.newObjective,
                dataType: 'json',
                success: function(data) {
                    if (data.success) {
                        vue.objectives.push(data.newObjective);
                        vue.newObjective = {
                            'description': '',
                            'dimension': ''
                        };
                    }
                },
                error: function(data) {
                    var errors = $.parseJSON(data.responseText);
                    console.log(errors);

                    $.each(errors, function(index, value) {
                        // alert(value);
                        displayErrorAlert(value, 'app');
                    });
                }
            });
        },
        removeObjective: function (index) {
            var vue = this;

            var params = {
                'objective_id': vue.objectives[index].id,
                '_method': 'DELETE',
                '_token': $('meta[name=csrf-token]').attr('content')
            };

            $.post('./objectives', params, function (data) {
                if (data.success)
                    vue.objectives.splice(index, 1);
            }, 'json');
        },
        editObjective: function (index) {
            this.newObjective.edit = true;
            this.newObjective.description = this.objectives[index].description;
            this.newObjective.dimension = this.objectives[index].dimension;

            this.newObjective.id = this.objectives[index].id;
        },
        cancelEdit: function () {
            this.newObjective.edit = false;
            this.newObjective.description = '';
            this.newObjective.dimension = '';
        },
        saveEdit: function () {
            var vue = this;
            this.newObjective._token = $('meta[name=csrf-token]').attr('content');
            this.newObjective._method = 'PUT';

            $.post('./objectives', this.newObjective, function (data) {
                if (data.success) {
                    vue.fetchData();
                    vue.newObjective = {
                        'description': '',
                        'dimension': '',
                        'edit': false
                    };
                }
            }, 'json');
        },
        fetchData: function () {
            $.getJSON('./objectives', function (objectives) {
                this.objectives = objectives;
            }.bind(this));
        }
    },
    ready: function () {
        this.fetchData();
    }
});
