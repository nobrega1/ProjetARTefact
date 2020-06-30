import Catalogue from '../../src/entities/catalogue/Collection'
import Brand from '../../src/entities/Brand/Collection'
import Edition from '../../src/entities/Edition/Collection'
import Product from '../../src/entities/Product/Collection'
import Test from '../../src/entities/Test/Collection'
import Bike from '../../src/entities/Bike/Collection'
import Mtb from '../../src/entities/Mtb/Collection'
//import Emtb from '../../src/entities/Emtb/Collection'
import Gravel from '../../src/entities/Gravel/Collection'
import Road from '../../src/entities/Road/Collection'
import Ebike from '../../src/entities/Ebike/Collection'
import tmpl from '../views/catalogue.handlebars'



let catalogue = new Catalogue();
catalogue.fetch(console.log(JSON.stringify(catalogue)));

console.log(JSON.stringify(catalogue));


let brand = new Brand();
brand.fetch();

let edition = new Edition();
edition.fetch();

let product = new Product();
product.fetch();

let test = new Test();
test.fetch();

let bike = new Bike();
bike.fetch();

let mtb = new Mtb();
mtb.fetch();

/*let emtb = new Emtb();
emtb.fetch();*/

let gravel = new Gravel();
gravel.fetch();

let road = new Road();
road.fetch();

let ebike = new Ebike();
ebike.fetch();





