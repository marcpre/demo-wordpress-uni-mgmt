import $ from 'jquery';

class MyNotes {
    constructor() {
        this.events();
    }

    events() {
        $(".delete.note").on("click", this.deleteNote)
    }

    deleteNote() {
        $.ajax({
            beforeSend: () => {
              xhr.setRequestHeader('X-WP-Nonce', universityData.nonce)  
            },
            url: universityData.root_url + '/wp-json/wp/v2/note/' + id, 
            type: 'DELETE', 
            success: (response) => {
                console.log(repsonse)
            }, 
            error: (response) => {
                console.log(repsonse)
            }
        })
    }
}

export default MyNotes;
