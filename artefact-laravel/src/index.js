
import Products from 'entities/product/collection';
import ViewProducts from 'entities/product/viewCollection';

import Tests from 'entities/test/collection';
import ViewTests from 'entities/test/viewCollection';


let products = new Products();
let vProducts = new ViewProducts({
    collection: products,
    el:'#products-list'
});
let tests = new Tests();
let vTests = new ViewTests({
    collection: tests,
    el:'#tests-list'
});
    
products.fetch({reset:true,success:()=>{
    let p=products.models;
 

   
}});
tests.fetch({reset:true,success:()=>{
  let t=tests.models;


 
}});


    


$(document).ready(function(){
  $('#productSearch').on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});






  