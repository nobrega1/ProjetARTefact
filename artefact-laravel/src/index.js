import Products from 'entities/product/collection';
import ViewProducts from 'entities/product/viewCollection';
import Catalogues from 'entities/catalogue/collection';
import ViewCatalogues from 'entities/catalogue/viewCollection';
/* 
let products = new Products();
let vProducts = new ViewProducts({
    collection: products,
    el:'#products-list'
}); */
let catalogues = new Catalogues();
let vCatalogues = new ViewCatalogues({
    collection: catalogues,
    el:'catalogues-list'
});

/* products.fetch({reset:true}); */
catalogue.fetch({reset:true});