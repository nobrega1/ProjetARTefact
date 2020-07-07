import {ImCollection} from 'lib/ImBackbone';
import Model from 'entities/test/model';

export default class extends ImCollection {

  url() {
    return 'http://pingouin1.heig-vd.ch/artefact/api/tests/';
  }

  model(attrs, options) {

    return new Model(attrs, options);
  }

}