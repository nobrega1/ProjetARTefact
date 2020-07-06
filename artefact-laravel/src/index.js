
import Products from 'entities/product/collection';
import ViewProducts from 'entities/product/viewCollection';

import Persons from 'entities/compte/collection';
import Tests from 'entities/test/collection';
 
let products = new Products();
let vProducts = new ViewProducts({
    collection: products,
    el:'#products-list'
});

//  products.fetch({reset:true})
 
    
products.fetch({reset:true,success:()=>{
    let p=products.models;
 

    //todo loop or filter
    console.log(products.at(0).get('editions') .filter(edition=>edition.no==1) );
}});