import $ from 'jquery';

class MyNotes {
    constructor() {
        this.events();
    }

    events() {
        $(".delete-note").on("click", this.deleteNote)
        $(".edit-note").on("click", this.editNote)
    }

    deleteNote(e) {
        var thisNote = $(e.target).parents("li")
        
        $.ajax({
            beforeSend: () => {
              xhr.setRequestHeader('X-WP-Nonce', universityData.nonce)  
            },
            url: universityData.root_url + '/wp-json/wp/v2/note/' + thisNote.data('data-id'), 
            type: 'DELETE', 
            success: (response) => {
                thisNote.slideUp()
                console.log(repsonse)
            }, 
            error: (response) => {
                console.log(repsonse)
            }
        })
    }
    
    editNote(e) {
        var thisNote = $(e.target).parents("li")
        thisNote.find(".note-title-field, .note-body-field").removeAttr("readonly").addClass("note-active-field")
        thisNote.find(".update-note").addClas("update-note--visible")        
        $.ajax({
            beforeSend: () => {
              xhr.setRequestHeader('X-WP-Nonce', universityData.nonce)  
            },
            url: universityData.root_url + '/wp-json/wp/v2/note/' + thisNote.data('data-id'), 
            type: 'DELETE', 
            success: (response) => {
                thisNote.slideUp()
                console.log(repsonse)
            }, 
            error: (response) => {
                console.log(repsonse)
            }
        })
    }
}

export default MyNotes;
