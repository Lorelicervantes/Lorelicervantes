var form = document.querySelector('.pageclip-form')
Pageclip.form(form, {
  onSubmit: function (event) { },
  onResponse: function (error, response) { },
  successTemplate: '<span>Gracias por contactarme!</span>'
})

var data = {
    name: 'Loreli Cervantes',
    email: 'contacto@lorelicervantes.engineer'
  }
  
  Pageclip.send('zAUx8uy0cvoPuDGUjThF2ffUUk2lN3vp', 'Contactos', data, function (error, response) {
    console.log('saved?', !!error, '; response:', error || response)
  })