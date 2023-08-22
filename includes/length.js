// Functions for calculation of length in different parameter

function lengthConverter(idss, valuess) {
    valuess = parseFloat(valuess);
    var inputFeet = document.getElementById("inputFeet");
    var inputMeters = document.getElementById("inputMeters");
    var inputInches = document.getElementById("inputInches");
    var inputcm = document.getElementById("inputcm");
    var inputYards = document.getElementById("inputYards");
    var inputKilometers = document.getElementById("inputKilometers");
    var inputMiles = document.getElementById("inputMiles");
    if (idss == "inputFeet") {
        inputMeters.value = (valuess / 3.2808).toFixed(2);
        inputInches.value = (valuess * 12).toFixed(2);
        inputcm.value = (valuess / 0.032808).toFixed();
        inputYards.value = (valuess * 0.33333).toFixed(2);
        inputKilometers.value = (valuess / 3280.8).toFixed(5);
        inputMiles.value = (valuess * 0.00018939).toFixed(5);
    }
    if (idss == "inputMeters") {
        inputFeet.value = (valuess * 3.2808).toFixed(2);
        inputInches.value = (valuess * 39.370).toFixed(2);
        inputcm.value = (valuess / 0.01).toFixed();
        inputYards.value = (valuess * 1.0936).toFixed(2);
        inputKilometers.value = (valuess / 1000).toFixed(5);
        inputMiles.value = (valuess * 0.00062137).toFixed(5);
    }
    if (idss == "inputInches") {
        inputFeet.value = (valuess * 0.083333).toFixed(3);
        inputMeters.value = (valuess / 39.370).toFixed(3);
        inputcm.value = (valuess / 0.39370).toFixed(2);
        inputYards.value = (valuess * 0.027778).toFixed(3);
        inputKilometers.value = (valuess / 39370).toFixed(6);
        inputMiles.value = (valuess * 0.000015783).toFixed(6);
    }
    if (idss == "inputcm") {
        inputFeet.value = (valuess * 0.032808).toFixed(3);
        inputMeters.value = (valuess / 100).toFixed(3);
        inputInches.value = (valuess * 0.39370).toFixed(2);
        inputYards.value = (valuess * 0.010936).toFixed(3);
        inputKilometers.value = (valuess / 100000).toFixed(6);
        inputMiles.value = (valuess * 0.0000062137).toFixed(6);
    }
    if (idss == "inputYards") {
        inputFeet.value = (valuess * 3).toFixed();
        inputMeters.value = (valuess / 1.0936).toFixed(2);
        inputInches.value = (valuess * 36).toFixed();
        inputcm.value = (valuess / 0.010936).toFixed();
        inputKilometers.value = (valuess / 1093.6).toFixed(5);
        inputMiles.value = (valuess * 0.00056818).toFixed(5);
    }
    if (idss == "inputKilometers") {
        inputFeet.value = (valuess * 3280.8).toFixed();
        inputMeters.value = (valuess * 1000).toFixed();
        inputInches.value = (valuess * 39370).toFixed();
        inputcm.value = (valuess * 100000).toFixed();
        inputYards.value = (valuess * 1093.6).toFixed();
        inputMiles.value = (valuess * 0.62137).toFixed(2);
    }
    if (idss == "inputMiles") {
        inputFeet.value = (valuess * 5280).toFixed();
        inputMeters.value = (valuess / 0.00062137).toFixed();
        inputInches.value = (valuess * 63360).toFixed();
        inputcm.value = (valuess / 0.0000062137).toFixed();
        inputYards.value = (valuess * 1760).toFixed();
        inputKilometers.value = (valuess / 0.62137).toFixed(2);
    }
}



// Functions for 

function temperatureConverter(source,valNum) {
    valNum = parseFloat(valNum);
    var inputFahrenheit = document.getElementById("inputFahrenheit");
    var inputCelsius = document.getElementById("inputCelsius");
    var inputKelvin = document.getElementById("inputKelvin");
    if (source=="inputFahrenheit") {
      inputCelsius.value=((valNum-32)/1.8).toFixed(2);
      inputKelvin.value=(((valNum-32)/1.8)+273.15).toFixed(2);
    }
    if (source=="inputCelsius") {
      inputFahrenheit.value=((valNum*1.8)+32).toFixed(2);
      inputKelvin.value=((valNum)+273.15).toFixed(2);
    }
    if (source=="inputKelvin") {
      inputFahrenheit.value=(((valNum-273.15)*1.8)+32).toFixed(2);
      inputCelsius.value=((valNum)-273.15).toFixed(2);
    }
  }