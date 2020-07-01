import {ImCollection} from 'lib/ImBackbone';
import Model from 'entities/catalogue/modelProduct';


export default class extends ImCollection {

  url() {
    return 'http://127.0.0.1:8000/api/products/';
  }

  model(attrs, options) {

    return new Model(attrs, options);
  }

}