import {ImView} from 'lib/ImBackbone';
import catalogue from 'entities/catalogue/catalogue.handlebars';

export default class extends ImView {

    events(){
        return{

        };
    }
    
    initialize(attrs, options) {
        this.listenTo(this.model, 'change reset',this.render);
        }
      
        render() {
          let dom = $(catalogue(...this.modelEdition.toJSON(),...this.modelProduct.toJSON()));
          this.$el.replaceWith(dom);
          this.setElement(dom);
          return this;
        }
 
}