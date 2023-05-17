import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


var deleteComic = document.querySelectorAll('.delete');

for (var i = 0; i < deleteComic.length; i++) {

    deleteComic[i].addEventListener('click', function(event) {
        
        var choice = confirm('sei Sicuro?');
        if (!choice) {
            event.preventDefault();
        }
})

}