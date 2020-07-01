
import Products from 'entities/product/collection';
import ViewCatalogues from 'entities/catalogue/viewCollection';

/* let products = new Products();
let vProducts = new ViewProducts({
    collection: products,
    el:'#products-list'
});
let catalogues = new Catalogues();
let vCatalogues = new ViewCatalogues({
    collection: catalogues,
    el:'#catalogues-list'
});

catalogues.fetch({reset:true});
/* products.fetch({reset:true})
 */
let products = new Products();

products.fetch({reset:true,success:()=>{
    let p=products.models();

    //todo loop or filter
    for(p )
    console.log(products.at(0).get('editions').some(edition=>edition.eventno==2));
}});