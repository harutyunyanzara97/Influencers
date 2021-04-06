
$(document).ready(function () {
    $(".list-see-more").on("click", function() {
        $(".card").css("display", "none");
        $(".more-list-card").css("display", "block");
    });

    var domain = 'https://' + window.location.hostname;
    console.log(domain);


});


$(document).ready(function(){
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });



/*statistic page start */


    //wait till the page loads
    $(function() {

        //set up the tab click event handler
        $("section.tabs ul li").click(function () {
            //handle the tab click event
            //alert("clicked " + this.id);
            var tabId = this.id; //get the id of the element that was clicked
            var contentId = this.id + "_content"; //figure out the id of the corresonding article element by appending "_content" to the id

            //add the selected class to the selected tab to make its bottom border disappear
            $("section.tabs ul li").removeClass("selected");
            $("section.tabs ul li#" + tabId).addClass("selected");

            //a css-based way of showing/hiding a selected article
            $("section.tabs article").removeClass("selected");
            $("section.tabs article#" + contentId).addClass("selected");

        });

    });

    $('.campaignsAndLists').on('click', function (event) {
        event.preventDefault();
        $( this ).parent().find( 'a.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
        $.ajax({
            url: '/index',
            method: "get",
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            success: (response) => {
                $("#main").html(response);
            }
        })
    });
    $('.profile-tab').on('click', function (event) {
        event.preventDefault();
        $( this ).parent().find( 'a.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
        $.ajax({
            url: '/profile',
            type: 'get',
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            success: (response) => {
                $("#main").html(response);
            }
        });
    });
    $('.payment').on('click', function (event) {
        event.preventDefault();
        $( this ).parent().find( 'a.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
        $.ajax({
            url: '/plans',
            method: "get",
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            success: (response) => {
                $("#main").html(response);
            }
        })
    });
    $('.billing').on('click', function (event) {
        event.preventDefault();
        $( this ).parent().find( 'a.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
        $.ajax({
            url: 'billing',
            method: "get",
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            success: (response) => {
                $("#main").html(response);
            }
        })
    });
    $('.searchInfluencer').on('click', function (event) {
        event.preventDefault();
        $( this ).parent().find( 'a.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
        $.ajax({
            url: '/search-influencer',
            method: "get",
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            success: (response) => {
                $("#main").html(response);
            }
        })
    });
    $('.contact').on('click', function (event) {
        event.preventDefault();
        $( this ).parent().find( 'a.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
        $.ajax({
            url: '/contact',
            method: "get",
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            success: (response) => {
                $("#main").html(response);
            }
        })
    });
    $('.myLists').on('click', function (event) {
        $( this ).parent().find( 'a.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
        $("#main").html(`<div id="Lists" class="tab-pane fade active show">
                     <button class="color-red fs-12 border-0 ml-2 bg-transparent create_new_list">
<!--                               <img src="{{asset('img/plus-icon.png')}}" alt="" width="14" height="14" class="mr-1">-->
                      Create New List</button>
                            <div class="d-flex ">
                                <div class="card">
                                    <div class="roboto-18-gray mb-3">Favorites List</div>
                                    <div class="roboto-16 my-2">Favorites List</div>
                                    <div class="roboto-12 mb-1">1 Influencer</div>
                                    <div class="d-flex justify-content-end">
                                        <button class="gray-bordered-btn list-see-more">See More </button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="roboto-18-gray mb-3">Favorites List</div>
                                    <div class="roboto-16 my-2">Nina Mendes</div>
                                    <div class="roboto-12 mb-2">1 Influencer</div>
                                    <div class="d-flex justify-content-end">
                                        <button class="gray-bordered-btn list-see-more">See More </button>
                                    </div>
                                </div>
                            </div>
                    </div>`);

    });


    $("#ststis_a").on("click", function(){
        $(".btn-list-compaings").toggleClass("active");
        $(".create_new_campaign, .create_new_list").addClass("fade");
        $("#campaigns").css({
            "display":"none"
        })
    })

    $(".pointer").on("click", function () {

        $("#statistics").addClass("active");
        $("#statistics").addClass("show");

    })

});
/*----------------------modal start---------------------------*/
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
/*----------------------modal end---------------------------*/
