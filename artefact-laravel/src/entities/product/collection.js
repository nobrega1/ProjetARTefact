import {ImCollection} from 'lib/ImBackbone';
import Model from 'entities/product/model';


export default class extends ImCollection {

  url() {
    return 'http://pingouin1.heig-vd.ch/artefact/api/products/';
  }

  model(attrs, options) {

    return new Model(attrs, options);
  }

}