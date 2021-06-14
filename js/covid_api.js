(function($){
    
    $(document).ready(function() {
      

        //https://www.w3schools.com/jquery/eff_animate.asp

        //api link
        //The fetch() method used to fetch a resource.
        fetch('https://api.covid19api.com/world/total')
        // asynchronously load contents of the url
           // return a Promise that resolves when res is loaded
            .then(res => res.json())
             // call this function when res is loaded
      // return a Promise with result of above function
            .then(data => {
                // call this function when the above chained Promise resolves
                console.log("Object");
                console.log(data);
                document.getElementById('totalCount').innerHTML = data.confirmed;
                document.getElementById('recoverdCount').innerHTML = data.recovered;
                document.getElementById('deathCount').innerHTML = data.deaths;
            })
            .finally(() => {
                // counterup js start here
                $('.count-people').each(function () {
                    console.log("count-people 1");
                    //split :Split a string into an array of substrings
                    // console.log($(this).text().split(".")[1]);
                    //var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;


                    // duration - sets the speed of the animation
                    // step - specifies a function to be executed for each step in the animation

                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                        }, 
                        {
                            duration: 2000,
                            step: function (func) {
                                console.log("func");
                                console.log(func);
                                $(this).text(parseFloat(func).toFixed(0));
                                "635.787" 635.787  636
                        }

                    });
                });
            });

        
    });
}(jQuery));