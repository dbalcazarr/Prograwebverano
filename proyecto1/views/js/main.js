// JavaScript Document

$(document).ready(function() {
    $('#registerForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El nombre del integrante no puede estar vacio'
                    },
                    stringLength: {
                        min: 2,
                        max: 50,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                  
                }
            },
			apellido: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo del apellido no puede estar vacio'
                    },
                }
            },
			peso: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo del peso no puede estar vacio'
                    },
					regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'El campo solo puede contener numeros'
                    }
                }
            },
			numero: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo numero no puede estar vacio'
                    },
					regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'El campo solo puede contener numeros'
                    }
                }
            },
			estatura: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo clave no puede estar vacio'
                    },
                }
            },
			abreviatura: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo abreviatura no puede estar vacio'
                    },
                }
            },
			edad: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo de la edad no puede estar vacio'
                    },
					regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'El campo solo puede contener numeros'
                    }
                }
            },
			
			
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
});