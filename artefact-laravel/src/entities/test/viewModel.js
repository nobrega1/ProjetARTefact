import {ImView} from 'lib/ImBackbone';
import test from 'entities/test/test.handlebars';

export default class extends ImView {

    events(){
        return{

        };
    }
    
    initialize(attrs, options) {
        this.listenTo(this.model, 'change reset',this.render);
        }
      
        render() {
          let dom = $(test(this.model.toJSON()));
          this.$el.replaceWith(dom);
          this.setElement(dom);
          return this;
        }
 
}