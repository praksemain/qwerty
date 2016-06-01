$(document).ready(function(){
    $('#ContactForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Lūdzu ievadiet savu vārdu!'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Lūdzu ievadiet savu e-pasta adresi!'
                    },
                    emailAddress: {
                        message: 'Lūdzu ievadiet derīgu e-pasta adresi!'
                    }
                }
            },
            phoneNumber: {
                validators: {
                    notEmpty: {
                        message: 'Lūdzu ievadiet savu telefona numuru!'
                    },
                    regexp: {
                        message: 'Lūdzu ievadiet derīgu kontakttālruni!',
                        regexp:  /[0-9]/
                    }
                }
            },
            message: {
                validators: {
                    notEmpty: {
                        message: 'Lūdzu ievadiet ziņu!'
                    },
                    stringLength: {
                        max: 1000,
                        message: 'Ziņa nedrīkst būt garāka par 1000 simboliem!'
                    }
                }
            }
        }
    })

});