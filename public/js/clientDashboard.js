
$(document).ready(function(){
    $("#menu").on("click", function() {
        $(".overlay").css("display", "block");
        $("#lgMenu").addClass("enter");
    });
    $("#exit, .overlay").on("click", function() {
        $("#lgMenu").removeClass("enter");
        $(".overlay").css("display", "none");
    });

    $("#menu-view").on("click", function() {
        $(".overlay").css("display", "block");
        $("#lgMenu-view").addClass("enter");
    });
    $("#exit-view, .overlay").on("click", function() {
        $("#lgMenu-view").removeClass("enter");
        $(".overlay").css("display", "none");
    });

    $(".openProfileMenu").on("click", function() {
        $(".overlay").css("display", "block");
        $("#profileMenu").addClass("enter");
    });
    $("#exit-profile, #exit-profile1,  .overlay").on("click", function() {
        $("#profileMenu").removeClass("enter");
        $(".overlay").css("display", "none");
    });

    $(".influecer-area").on("click", function() {
        $(".main-blocks-div").css("display", "none");
        $(".table-div").removeClass("d-none");
        $("#menu-view").removeClass("d-none");
    });

    $(".open-tab").on("click", function( ) {
        $(".nav-link").toggleClass("d-none");
        $(".open-tab").toggleClass("rotate180")
    });

    $(".paymentPlan").on("click", function( ) {
        $(".paymentPlan.active").removeClass("active");
        $(this).addClass("active");
    });

    $("#account-profile-tab").on("click", function( ) {
        $("#accountProfile").removeClass("d-none");
        $("#billingDetails").addClass("d-none");
        $("#planSubscribe").addClass("d-none");
        $(".header-input-section").addClass("d-none");
    });

    $("#billing-details-tab").on("click", function( ) {
        $("#accountProfile").addClass("d-none");
        $("#billingDetails").removeClass("d-none");
        $("#planSubscribe").addClass("d-none");
        $(".header-input-section").addClass("d-none");
    });

    $("#payment-plans-tab").on("click", function( ) {
        $("#accountProfile").addClass("d-none");
        $("#billingDetails").addClass("d-none");
        $("#planSubscribe").removeClass("d-none");
        $(".header-input-section").addClass("d-none");
    });

    $("#payment-method-tab").on("click", function( ) {
        $("#accountProfile").addClass("d-none");
        $("#billingDetails").addClass("d-none");
        $("#planSubscribe").removeClass("d-none");
        $(".header-input-section").addClass("d-none");
    });

    $(".profileMenu--block").on("click", function( ) {
        $(".profileMenu--content").css("display", "none");
        $(".profileMenu--block--content").css("display", "block");
    });
    $(".back-icon").on("click", function( ) {
        $(".profileMenu--block--content").css("display", "none");
        $(".profileMenu--content").css("display", "block");
    });

});

$(document).ready(function () {
    $(".list-see-more").on("click", function() {
        $(".card").css("display", "none");
        $(".more-list-card").css("display", "block");
    });
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

            /*
            //an alternative javascript-only way of showing/hiding a selected article
            //without relying on CSS classes to do that:
            $("section.tabs article").hide(); //make all articles disappear
            $("section.tabs article#" + contentId).show(); //make the selected article appear
            */
        });

    });












    /*$("#influencers").on("click", function () {
        $(".analytics_ul a:first-child").css({
            "background": "#F5F7FB",
            "border" : "none"
        })
        $("#influencers").toggleClass("influencers")
      $(".analytics_block_ul,.grafic_container,.audience_geography_age_ethnicity_container").toggleClass("fade");
    })*/

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


    // chart js bar
    // var ctx = document.getElementById('bar').getContext('2d');
    // var chart = new Chart(ctx, {
    //     // The type of chart we want to create
    //     type: 'bar',
    //
    //     // The data for our dataset
    //     data: {
    //         labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    //         datasets: [{
    //             label: ' Lorem Ipsum',
    //             backgroundColor: '#00E4DB',
    //             data: [4000, 4000, 3200, 3000-200, 4000-300, 3000-100]
    //         },
    //             {
    //                 label: ' Lorem Ipsum',
    //                 backgroundColor: '#4C71F0',
    //                 data: [5000-100, 4000-200, 4000-300, 3000, 4000-200, 3000-200]
    //             }
    //         ]
    //     },
    //
    //     // Configuration options go here
    //     options: {
    //         scales: {
    //             xAxes: [{
    //                 gridLines: {
    //                     display: false
    //                 }
    //             }],
    //             yAxes: [{
    //                 gridLines: {
    //                     display: true
    //                 }
    //             }]
    //         },
    //         tooltips: {
    //             callbacks: {
    //                 label: function(t, d) {
    //                     var xLabel = d.datasets[t.datasetIndex].label;
    //                     var yLabel = d.datasets[t.datasetIndex].data[t.index];
    //                     return xLabel + ': $' + yLabel;
    //                 }
    //
    //
    //             }
    //         }
    //     }
    // });

    // chart js line
    // var ctx = document.getElementById('line').getContext('2d');
    // var chart = new Chart('line', {
    //     type: 'line',
    //     data: {
    //         labels: ['', '', '', '', '', '', '','', '', ''],
    //         datasets: [
    //             {
    //                 data: [0.3, 0.6, 0.4, 1.3, 0.9, 1.4, 0.3, 1, 1.4, 0.4],
    //                 borderColor: '#EF6262',
    //                 backgroundColor: '#EF6262',
    //                 fill: false,
    //                 label: 'Lorem Ipsum',
    //                 lineTension: 0
    //             },
    //             {
    //                 data: [0.2, 0.5, 0.3, 1.2, 0.8, 1.3, 0.3,0.8, 1.3, 0.3],
    //                 borderColor: '#3A96FD',
    //                 backgroundColor: '#3A96FD',
    //                 fill: false,
    //                 label: 'Lorem Ipsum',
    //                 lineTension: 0
    //             }
    //         ]
    //     },
    //     options: {
    //         scales: {
    //             yAxes: [{
    //                 ticks: {
    //                     beginAtZero: true
    //                 }
    //             }]
    //         }
    //     }
    // });

/*
    $(".analytics_ul li").on("click", function(){
        $(this).addClass("li_active");
    })*/
    //
    // $(".budget_link").on("click", function () {
    //     $(".overlay").css({
    //         "display":"block",
    //     })
    // })

    // $(".budget_link").on("click", function() {
    //     $(".overlay").css("display", "block");
    //     $("#lgMenu").addClass("enter");
    // });


    /*statistic page end */

});
/*----------------------modal start---------------------------*/
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
/*
btn.onclick = function() {
    modal.style.display = "block";
}
*/

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
