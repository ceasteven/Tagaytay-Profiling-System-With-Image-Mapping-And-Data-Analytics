window.onload = function() {
    var genderSelect = document.getElementById('gender');
var pregnantInput = document.getElementById('pregnant');

if (genderSelect.value == 'Female' || genderSelect.value == '') {
    pregnantInput.disabled = false;
} else {
    pregnantInput.disabled = true;
}
genderSelect.onchange = function() {
    if (this.value == 'Female' || this.value == '') {
        pregnantInput.disabled = false;
    } else {
        pregnantInput.disabled = true;
    }
}
var soloparentSelect = document.getElementById('soloparent');
var soloparentIdSelect = document.getElementById('soloparentid');
var disabilitySelect = document.getElementById('disability');
var disabilityTypeSelect = document.getElementById('disabilitytype');
var pwdIdSelect = document.getElementById('pwdid');

var crimeSelect = document.getElementById('crime');
var crimeTypeSelect = document.getElementById('crimetype');
var crimeLocSelect = document.getElementById('crimeloc');
var bloodTypeSelect = document.getElementById('bloodtype');
var rhTypeSelect = document.getElementById('rhtype');
var treatmentSelect = document.getElementById('treatment');
var treatmentLocSelect = document.getElementById('treatmentloc');

if (soloparentSelect.value == 'No' || soloparentSelect.value == '') {
    soloparentIdSelect.disabled = true;
} else {
    soloparentIdSelect.disabled = false;
}

soloparentSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        soloparentIdSelect.disabled = true;
    } else {
        soloparentIdSelect.disabled = false;
    }
}

if (disabilitySelect.value == 'No' || disabilitySelect.value == '') {
    disabilityTypeSelect.disabled = true;
    pwdIdSelect.disabled = true;
} else {
    disabilityTypeSelect.disabled = false;
    pwdIdSelect.disabled = false;
}

disabilitySelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        disabilityTypeSelect.disabled = true;
        pwdIdSelect.disabled = true;
    } else {
        disabilityTypeSelect.disabled = false;
        pwdIdSelect.disabled = false;
    }
}



if (crimeSelect.value == 'No' || crimeSelect.value == '') {
    crimeTypeSelect.disabled = true;
    crimeLocSelect.disabled = true;
} else {
    crimeTypeSelect.disabled = false;
    crimeLocSelect.disabled = false;
}

crimeSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        crimeTypeSelect.disabled = true;
        crimeLocSelect.disabled = true;
    } else {
        crimeTypeSelect.disabled = false;
        crimeLocSelect.disabled = false;
    }
}
if (bloodTypeSelect.value == 'Dont Know' || bloodTypeSelect.value == '') {
    rhTypeSelect.disabled = true;
} else {
    rhTypeSelect.disabled = false;
}

bloodTypeSelect.onchange = function() {
    if (this.value == 'Dont Know' || this.value == '') {
        rhTypeSelect.disabled = true;
    } else {
        rhTypeSelect.disabled = false;
    }
}
if (treatmentSelect.value == 'Yes' || treatmentSelect.value == '') {
    treatmentLocSelect.disabled = false;
} else {
    treatmentLocSelect.disabled = true;
}

treatmentSelect.onchange = function() {
    if (this.value == 'Yes' || this.value == '') {
        treatmentLocSelect.disabled = false;
    } else {
        treatmentLocSelect.disabled = true;
    }



 
}

var ofwSelect = document.getElementById('ofw');
var ofwCountryInput = document.getElementById('ofwcountry');

if (ofwSelect.value == 'No' || ofwSelect.value == '') {
  ofwCountryInput.disabled = true;
  ofwCountryInput.value = '';
} else {
  ofwCountryInput.disabled = false;
}

ofwSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    ofwCountryInput.disabled = true;
    ofwCountryInput.value = '';
  } else {
    ofwCountryInput.disabled = false;
  }
}

    var residingSelect = document.getElementById('residing');
  var residingInput = document.getElementById('residingo');

  if (residingSelect.value == 'Other address' || residingSelect.value == '') {
    residingInput.disabled = false;


    
  } else {
    residingInput.disabled = true;
  }

  residingSelect.onchange = function() {
    if (this.value == 'Other address') {
        residingInput.disabled = false;
      

    } else {
        residingInput.disabled = true;
 
    }
  }
var attendschoolSelect = document.getElementById('attendschool');
  var yearlevelSelect = document.getElementById('yearlevel');
  var schooltypeSelect = document.getElementById('schooltype');
  var notattendingSelect = document.getElementById('notattending');

  if (attendschoolSelect.value == 'No' || attendschoolSelect.value == '') {
    yearlevelSelect.disabled = true;
    schooltypeSelect.disabled = true;
    notattendingSelect.disabled = false;
    
  } else {
    yearlevelSelect.disabled = false;
    schooltypeSelect.disabled = false;
    notattendingSelect.disabled = true;
  }

  attendschoolSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
      yearlevelSelect.disabled = true;
      schooltypeSelect.disabled = true;
      notattendingSelect.disabled = false;
      

    } else {
      yearlevelSelect.disabled = false;
      schooltypeSelect.disabled = false;
      notattendingSelect.disabled = true;

    }
  }


  var pastTrainingSelect = document.getElementById('pasttraining');
  var trainNumInput = document.getElementById('trainnum');
  var trainProgramInput = document.getElementById('trainprogram');

  if (pastTrainingSelect.value == 'No' || pastTrainingSelect.value == '') {
    trainNumInput.disabled = true;
    trainProgramInput.disabled = true;

  } else {
    trainNumInput.disabled = false;
    trainProgramInput.disabled = false;
  }

  pastTrainingSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
      trainNumInput.disabled = true;
      trainProgramInput.disabled = true;

    } else {
      trainNumInput.disabled = false;
      trainProgramInput.disabled = false;
    }
  }

  var voterSelect = document.getElementById('voter');
  var votedLastSelect = document.getElementById('votedlast');

  if (voterSelect.value == 'No' || voterSelect.value == '' || voterSelect.value == 'Dont Know') {
    votedLastSelect.disabled = true;
  } else {
    votedLastSelect.disabled = false;
  }

  voterSelect.onchange = function() {
    if (this.value == 'No' || this.value == '' || this.value == 'Dont Know') {
      votedLastSelect.disabled = true;


    } else {
      votedLastSelect.disabled = false;
     
    }
  }






  var nworkSelect = document.getElementById('nwork');
  var jobNumInput = document.getElementById('jobnum');
  var occupSelect = document.getElementById('occup');
  var occupCodeInput = document.getElementById('occupcode');
  var industryInput = document.getElementById('industry');
  var industryCodeInput = document.getElementById('industrycode');
  var employInput = document.getElementById('employ');
  var employHrsInput = document.getElementById('employhrs');
  var employTHrsInput = document.getElementById('employthrs');
  var addHrsWorkPastSelect = document.getElementById('addhrsworkpast');
  var addExtraWorkSelect = document.getElementById('addextrawork');
  var classWorkerSelect = document.getElementById('classworker');

  if (nworkSelect.value == 'No' || nworkSelect.value == '') {
    jobNumInput.disabled = true;
    occupSelect.disabled = true;
    occupCodeInput.disabled = true;
    industryInput.disabled = true;
    industryCodeInput.disabled = true;
    employInput.disabled = true;
    employHrsInput.disabled = true;
    employTHrsInput.disabled = true;
    addHrsWorkPastSelect.disabled = true;
    addExtraWorkSelect.disabled = true;
    classWorkerSelect.disabled = true;
  } else {
    jobNumInput.disabled = false;
    occupSelect.disabled = false;
    occupCodeInput.disabled = false;
    industryInput.disabled = false;
    industryCodeInput.disabled = false;
    employInput.disabled = false;
    employHrsInput.disabled = false;
    employTHrsInput.disabled = false;
    addHrsWorkPastSelect.disabled = false;
    addExtraWorkSelect.disabled = false;
    classWorkerSelect.disabled = false;
  }

  nworkSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
      jobNumInput.disabled = true;
      occupSelect.disabled = true;
      occupCodeInput.disabled = true;
      industryInput.disabled = true;
      industryCodeInput.disabled = true;
      employInput.disabled = true;
      employHrsInput.disabled = true;
      employTHrsInput.disabled = true;
      addHrsWorkPastSelect.disabled = true;
      addExtraWorkSelect.disabled = true;
      classWorkerSelect.disabled = true;
    } else {
      jobNumInput.disabled = false;
      occupSelect.disabled = false;
      occupCodeInput.disabled = false;
      industryInput.disabled = false;
      industryCodeInput.disabled = false;
      employInput.disabled = false;
      employHrsInput.disabled = false;
      employTHrsInput.disabled = false;
      addHrsWorkPastSelect.disabled = false;
      addExtraWorkSelect.disabled = false;
      classWorkerSelect.disabled = false;
    }
  }
  

var fjobpastSelect = document.getElementById('fjobpast');
var findWorkSelect = document.getElementById('findwork');
var rfindWorkSelect = document.getElementById('rfindwork');
var findWorkNumInput = document.getElementById('findworknum');
var rfNotWorkSelect = document.getElementById('rfnotwork');
var lastLookJobSelect = document.getElementById('lastlookjob');
var pastWillingWorkSelect = document.getElementById('pastwillingwork');
var willingToTakeUpWorkSelect = document.getElementById('willingtotakeupwork');

if (fjobpastSelect.value == 'No' || fjobpastSelect.value == '') {
    findWorkSelect.disabled = true;
    rfindWorkSelect.disabled = true;
    findWorkNumInput.disabled = true;
    rfNotWorkSelect.disabled = false;
    lastLookJobSelect.disabled = false;
    pastWillingWorkSelect.disabled = false;
    willingToTakeUpWorkSelect.disabled = false;
} else {
    findWorkSelect.disabled = false;
    rfindWorkSelect.disabled = false;
    findWorkNumInput.disabled = false;
    rfNotWorkSelect.disabled = true;
    lastLookJobSelect.disabled = true;
    pastWillingWorkSelect.disabled = true;
    willingToTakeUpWorkSelect.disabled = true;
}

fjobpastSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        findWorkSelect.disabled = true;
        rfindWorkSelect.disabled = true;
        findWorkNumInput.disabled = true;
        rfNotWorkSelect.disabled = false;
        lastLookJobSelect.disabled = false;
        pastWillingWorkSelect.disabled = false;
        willingToTakeUpWorkSelect.disabled = false;
    } else {
        findWorkSelect.disabled = false;
        rfindWorkSelect.disabled = false;
        findWorkNumInput.disabled = false;
        rfNotWorkSelect.disabled = true;
        lastLookJobSelect.disabled = true;
        pastWillingWorkSelect.disabled = true;
        willingToTakeUpWorkSelect.disabled = true;
    }
}
var philhealthMemberSelect = document.getElementById('philhealthmember');
  var memberTypeSelect = document.getElementById('membertype');
  var philhealthDependentsSelect = document.getElementById('philhealthdependent');

  if (philhealthMemberSelect.value == 'No' || philhealthMemberSelect.value == '') {
    memberTypeSelect.disabled = true;
    philhealthDependentsSelect.disabled = true;
  } else {
    memberTypeSelect.disabled = false;
    philhealthDependentsSelect.disabled = false;
  }

  philhealthMemberSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
      memberTypeSelect.disabled = true;
      philhealthDependentsSelect.disabled = true;
      memberTypeSelect.value = '';
    philhealthDependentsSelect.value = '';
    } else {
      memberTypeSelect.disabled = false;
      philhealthDependentsSelect.disabled = false;
    }



  }


}

