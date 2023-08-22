<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <title>Unit Convertor</title>
</head>
<style>
.bg {
    /* background-color: #2193b0; */
    background-image: linear-gradient(to right, rgba(250, 193, 180, 0), rgba(250, 193, 180, 1));
}

.bg-tmp {
    /* background-color: #2193b0; */
    background-image: linear-gradient(to right, rgba(240, 248, 255, 0), rgba(240, 248, 255, 1));
}
</style>

<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="border border-secondary bg my-4"
        style="width: 80%; border-radius: 7px; margin-left: auto; margin-right: auto;">
        <div class="row my-4">
            <div class="col-12">
                <h1 class="text-center">Length Convertor</h1>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            Length Conversion Calculator created by me displays the conversion of the length parameter from one unit to
            the other unit. <br> This online length conversion calculator tool makes the calculation faster and it
            displays the conversion in a fraction of seconds.
        </div>

        <div class="row my-4">
            <div class="col-2"></div>
            <div class="col-4">
                <label>Feet</label>
                <input id="inputFeet" class="  " type="number" placeholder="Feet"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
            <div class="col-4">
                <label>Meters</label>
                <input id="inputMeters" class="  " type="number" placeholder="Meters"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row my-4">
            <div class="col-2"></div>
            <div class="col-4">
                <label>Inches</label>
                <input id="inputInches" class="  " type="number" placeholder="Inches"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
            <div class="col-4">
                <label>cm</label>
                <input id="inputcm" class="  " type="number" placeholder="cm"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row my-4">
            <div class="col-2"></div>
            <div class="col-4">
                <label>Yards</label>
                <input id="inputYards" class="  " type="number" placeholder="Yards"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
            <div class="col-4">
                <label>Kilometers</label>
                <input id="inputKilometers" class="  " type="number" placeholder="Kilometers"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row my-4">
            <div class="col-2"></div>
            <div class="col-4">
                <label>Miles</label>
                <input id="inputMiles" class="  " type="number" placeholder="Miles"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
            <div class="col-4"></div>
            <div class="col-2"></div>
        </div>

    </div>





    <!-- Temprature -->

    <div class="border border-secondary bg-tmp my-4"
        style="width: 80%; border-radius: 7px; margin-left: auto; margin-right: auto;">
        <div class="row my-4">
            <div class="col-12">
                <h1 class="text-center">Temprature Convertor</h1>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            A temperature converter is a tool used to convert temperatures, to and from Celsius, Fahrenheit, and Kelvin.
        </div>

        <div class="row my-4">
            <div class="col-2"></div>
            <div class="col-4">
                <label>Fahrenheit</label>
                <input id="inputFahrenheit" class="w3-input w3-border" type="number" min="-459.66999999999996"
                    placeholder="Fahrenheit" oninput="temperatureConverter(this.id,this.value)"
                    onchange="temperatureConverter(this.id,this.value)">
            </div>
            <div class="col-4">
                <label>Celsius</label>
                <input id="inputCelsius" class="w3-input w3-border" type="number" min="-273.15" placeholder="Celsius"
                    oninput="temperatureConverter(this.id,this.value)"
                    onchange="temperatureConverter(this.id,this.value)">
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row my-4">
            <div class="col-2"></div>
            <div class="col-4">
                <label>Kelvin</label>
                <input id="inputKelvin" class="w3-input w3-border" type="number" min="0" placeholder="Kelvin"
                    oninput="temperatureConverter(this.id,this.value)"
                    onchange="temperatureConverter(this.id,this.value)">
            </div>
            <div class="col-4">

            </div>
            <div class="col-2"></div>
        </div>

        <div class="row my-4">
            <div class="col-2"></div>
            <div class="col-4">

            </div>
            <div class="col-4">

            </div>
            <div class="col-2"></div>
        </div>

    </div>




    <script src="includes/length.js"> </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


</body>

</html>