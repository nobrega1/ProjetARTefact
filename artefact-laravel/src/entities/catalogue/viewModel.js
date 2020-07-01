import {ImView} from 'lib/ImBackbone';
import catalogue from 'entities/catalogue/catalogue.handlebars';
import product from 'entities/product/product.handlebars';


export default class extends ImView {

    events(){
        return{

        };
    }
    
    initialize(attrs, options) {
        this.listenTo(this.model, 'change reset',this.render);
        }
      
        render() {
          let dom = $(catalogue({...this.model.toJSON(), ...this.model.toJSON()}));
          this.$el.replaceWith(dom);
          this.setElement(dom);
          return this;
        }
 
}