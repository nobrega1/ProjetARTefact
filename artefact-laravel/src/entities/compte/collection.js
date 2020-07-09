import {ImCollection} from 'lib/ImBackbone';
import Model from 'entities/compte/model';

export default class extends ImCollection {

  url() {
    return 'http://pingouin1.heig-vd.ch/artefact/api/persons/';
  }

  model(attrs, options) {

    return new Model(attrs, options);
  }

}