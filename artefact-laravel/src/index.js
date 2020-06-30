import Products from 'entities/product/collection';
import ViewProducts from 'entities/product/viewCollection';

let products = new Products();
let vProducts = new ViewProducts({
    collection: products,
    el:'#products-list'
});
products.fetch({reset:true});