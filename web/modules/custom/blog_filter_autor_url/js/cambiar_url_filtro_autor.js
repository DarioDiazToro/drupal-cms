/**
 * @file
 * Cambia la URL según el filtro "autor" seleccionado en una View AJAX.
 */


(function ($, Drupal, once) {
  let startCode = true;
  Drupal.behaviors.cambiarUrlFiltroAutor = {
    attach: function (context, settings) {
       if(!startCode) return;
        console.log("mundooo");
      // Aseguramos que solo se ejecute una vez
       $(document).on("ajaxSuccess", function(event, xhr, settings) {
  // Your code here
      let boton = once('boton-aplicar-filtros', '.form-actions input', context);
      let selectAutor = once('cambiar-url-filtro-autor', '.js-form-item-field-author-target-id select', context);
  changeAutor(boton,selectAutor)
});
const currentUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
 function changeAutor (boton,selectAutor){
   
       
      let autor = "";
      let autorId = "";

       console.log("changeAutor");
       console.log(selectAutor);
       $( selectAutor.length > 0 ? selectAutor : ".js-form-item-field-author-target-id select").on("change", function(e){
         autorId = e.target.value;
        const valueId =  `.js-form-item-field-author-target-id select option[value="${autorId}"]`;
          
          autor = $(valueId).text();
           console.log("  Holaaaa");

       });
       
       $(boton.length > 0 ? boton  : ".form-actions input").on('click mousedown touchstart', function (e) {
         // Obtener el valor del autor seleccionado
         const autorNombre = $('.js-form-item-field-author-target-id select')
           .find('option:selected')
           .text()
           .toLowerCase()
           .trim()
           .replace(/\s+/g, '-')       // Espacios por guiones
           .replace(/[^\w-]/g, '');    // Eliminar caracteres especiales

           // Obtener la URL actual sin parámetros
         const searchParams = new URLSearchParams(window.location.search);

          if(autorId!== "All"){
                  if (autorNombre ) {
           searchParams.set('autor', autor);
         } else {
           searchParams.delete('autor');
         }

         const nuevaUrl = currentUrl + '?' + searchParams.toString();
         history.pushState(null, null, nuevaUrl);
          console.log("click");
          }
          if(autorId == "All" || autor == ""){
          history.pushState(null, null, currentUrl);
           searchParams.delete('autor');

          }

         // El formulario se enviará normalmente después
       });

      if (boton.length && selectAutor.length) {
      }

    }

    const selectAutor = $(".js-form-item-field-author-target-id select")[0];
     console.log($(".js-form-item-field-author-target-id select"));
    const boton = $('.view-id-blog .form-actions input')[0];
     
    $( document ).ready(function() {
    
       $(selectAutor).val("All");
         $(boton).click();
           if( $(selectAutor).val("All") ){
           history.pushState(null, null, currentUrl);

           }
   changeAutor(boton,selectAutor);
    console.log(boton);
    console.log(selectAutor);

});
  startCode = false;
    }
  };
})(jQuery, Drupal, once);




/**
 * @file
 * Cambia la URL según el filtro "autor" seleccionado en una View AJAX.
 */

// (function ($, Drupal, once) {
//   let startCode = true;

//   Drupal.behaviors.cambiarUrlFiltroAutor = {
//     attach: function (context, settings) {
//       if (!startCode) return;

//       // ✅ Solo continuar si existe el filtro de autor
//       const filtroAutor = $('.js-form-item-field-author-target-id select', context);
//       if (!filtroAutor.length) return;

//       const currentUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;

//       function changeAutor() {
//         const boton = once('boton-aplicar-filtros', '.form-actions input', context);
//         const selectAutor = once('cambiar-url-filtro-autor', '.js-form-item-field-author-target-id select', context);

//         if (!selectAutor.length || !boton.length) return;

//         $(boton).on('click mousedown touchstart', function () {
//           const autorId = $('.js-form-item-field-author-target-id select').val();
//           const autor = $('.js-form-item-field-author-target-id select option:selected').text();

//           const autorNombre = autor
//             .toLowerCase()
//             .trim()
//             .replace(/\s+/g, '-')       // Espacios por guiones
//             .replace(/[^\w-]/g, '');    // Eliminar caracteres especiales

//           const searchParams = new URLSearchParams(window.location.search);

//           if (autorId !== "All" && autorNombre) {
//             searchParams.set('autor', autorNombre);
//             const nuevaUrl = currentUrl + '?' + searchParams.toString();
//             history.pushState(null, null, nuevaUrl);
//           } else {
//             searchParams.delete('autor');
//             history.pushState(null, null, currentUrl);
//           }
//         });
//       }

//       // ✅ Restablecer a "Todos" al cargar
//       $(document).ready(function () {
//         const selectAutor = $('.js-form-item-field-author-target-id select', context);
//         if (selectAutor.length) {
//           selectAutor.val("All"); // Cambia a la opción "All"
//           history.pushState(null, null, currentUrl); // Limpia la URL
//         }
//       });

//       // ✅ Activar el cambio de URL cuando AJAX termina de cargar la vista
//       $(document).on("ajaxSuccess", function () {
//         changeAutor();
//       });

//       startCode = false;
//     }
//   };
// })(jQuery, Drupal, once);


/**
 * @file
 * Cambia la URL según el filtro "autor" seleccionado en una View AJAX.
 */

