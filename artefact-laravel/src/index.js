
import Products from 'entities/product/collection';
import ViewProducts from 'entities/product/viewCollection';
import Catalogues from 'entities/catalogue/collection';
import ViewCatalogues from 'entities/catalogue/viewCollection';
import Persons from 'entities/compte/collection';
import Tests from 'entities/test/collection';
 
let products = new Products();
let vProducts = new ViewProducts({
    collection: products,
    el:'#products-list'
});
// let catalogues = new Catalogues();
// let vCatalogues = new ViewCatalogues({
    // collection: catalogues,
    // el:'#catalogues-list'
// });

// catalogues.fetch({reset:true});
//  products.fetch({reset:true})
 
    
products.fetch({reset:true,success:()=>{
    let p=products.models;
 

    //todo loop or filter
    console.log(products.at(0).get('editions') .filter(edition=>edition.no==1) );
}});