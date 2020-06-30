import {ImCollection} from 'lib/ImBackbone';
import Model from 'entities/Ebike/model';

export default class extends ImCollection {

  url() {
    return 'http://127.0.0.1:8000/api/ebikes';
  }

  model(attrs, options) {
    return new Model(attrs, options);
  }

  initialize(attrs, options) {
    this.metadata = new Model();

  }
  
}