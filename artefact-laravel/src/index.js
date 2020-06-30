/* import Catalogue from '../resources/js/Viewcatalogue'
 */



let catalogues = new catalogue();
let vCatalogue = new ViewCatalogue({
    collection: catalogues,
    el: '#'
});

catalogues.fetch({reset:true});
setInterval(() => {  
    tasks.fetch();
  }, 10000);