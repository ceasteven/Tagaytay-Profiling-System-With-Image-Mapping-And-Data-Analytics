function checkvalue(val) {
    if (val == "Other address" || this.value=='')
        document.getElementById('residingo').disabled=false;
    else
        document.getElementById('residingo').disabled=true;
}

document.getElementById('ofw').onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("ofwcountry").disabled = true;
    } else {
        document.getElementById("ofwcountry").disabled = false;
    }
}


document.getElementById("attendschool").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("yearlevel").disabled = true;
        document.getElementById("schooltype").disabled = true;
        document.getElementById("notattending").disabled = false;

    } else {
        document.getElementById("yearlevel").disabled = false;
        document.getElementById("schooltype").disabled = false;
        document.getElementById("notattending").disabled = true;

    }

}
document.getElementById("pasttraining").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("trainnum").disabled = true;
        document.getElementById("trainprogram").disabled = true;


    } else {
        document.getElementById("trainnum").disabled = false;
        document.getElementById("trainprogram").disabled = false;



    }

}
document.getElementById("voter").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("votedlast").disabled = true;


    } else {
        document.getElementById("votedlast").disabled = false;



    }

}

document.getElementById("philhealthmember").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("membertype").disabled = true;
        document.getElementById("philhealthdependent").disabled = true;


    } else {
        document.getElementById("membertype").disabled = false;
        document.getElementById("philhealthdependent").disabled = false;



    }

}

document.getElementById("nwork").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("jobnum").disabled = true;
        document.getElementById("occup").disabled = true;
        document.getElementById("occupcode").disabled = true;
        document.getElementById("industry").disabled = true;
        document.getElementById("industrycode").disabled = true;
        document.getElementById("employ").disabled = true;
        document.getElementById("employhrs").disabled = true;
        document.getElementById("employthrs").disabled = true;
        document.getElementById("addhrsworkpast").disabled = true;
        document.getElementById("addextrawork").disabled = true;
        document.getElementById("classworker").disabled = true;


    } else {
        document.getElementById("jobnum").disabled = false;
        document.getElementById("occup").disabled = false;
        document.getElementById("occupcode").disabled = false;
        document.getElementById("industry").disabled = false;
        document.getElementById("industrycode").disabled = false;
        document.getElementById("employ").disabled = false;
        document.getElementById("employhrs").disabled = false;
        document.getElementById("employthrs").disabled = false;
        document.getElementById("addhrsworkpast").disabled = false;
        document.getElementById("addextrawork").disabled = false;
        document.getElementById("classworker").disabled = false;




    }

}

document.getElementById("job").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("jobnum").disabled = true;
        document.getElementById("occup").disabled = true;
        document.getElementById("occupcode").disabled = true;
        document.getElementById("industry").disabled = true;
        document.getElementById("industrycode").disabled = true;
        document.getElementById("employ").disabled = true;
        document.getElementById("employhrs").disabled = true;
        document.getElementById("employthrs").disabled = true;
        document.getElementById("addhrsworkpast").disabled = true;
        document.getElementById("addextrawork").disabled = true;
        document.getElementById("classworker").disabled = true;


    } else {
        document.getElementById("jobnum").disabled = false;
        document.getElementById("occup").disabled = false;
        document.getElementById("occupcode").disabled = false;
        document.getElementById("industry").disabled = false;
        document.getElementById("industrycode").disabled = false;
        document.getElementById("employ").disabled = false;
        document.getElementById("employhrs").disabled = false;
        document.getElementById("employthrs").disabled = false;
        document.getElementById("addhrsworkpast").disabled = false;
        document.getElementById("addextrawork").disabled = false;
        document.getElementById("classworker").disabled = false;




    }

}

document.getElementById("fjobpast").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("findwork").disabled = true;
        document.getElementById("rfindwork").disabled = true;
        document.getElementById("findworknum").disabled = true;
        document.getElementById("rfnotwork").disabled = false;
        document.getElementById("lastlookjob").disabled = false;
        document.getElementById("pastwillingwork").disabled = false;
        document.getElementById("willingtotakeupwork").disabled = false;

    } else {
        document.getElementById("findwork").disabled = false;
        document.getElementById("rfindwork").disabled = false;
        document.getElementById("findworknum").disabled = false;
        document.getElementById("rfnotwork").disabled = true;
        document.getElementById("lastlookjob").disabled = true;
        document.getElementById("pastwillingwork").disabled = true;
        document.getElementById("willingtotakeupwork").disabled = true;



    }

}

document.getElementById("gender").onchange = function () {
    if (this.value == 'Female' || this.value=='') {
        document.getElementById("pregnant").disabled = false;


    } else {
        document.getElementById("pregnant").disabled = true;



    }

}

document.getElementById("soloparent").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("soloparentid").disabled = true;


    } else {
        document.getElementById("soloparentid").disabled = false;



    }

}

document.getElementById("disability").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("disabilitytype").disabled = true;
        document.getElementById("pwdid").disabled = true;


    } else {
        document.getElementById("disabilitytype").disabled = false;
        document.getElementById("pwdid").disabled = false;



    }

}

document.getElementById("bloodtype").onchange = function () {
    if (this.value == 'Dont Know' || this.value=='') {
        document.getElementById("rhtype").disabled = true;


    } else {
        document.getElementById("rhtype").disabled = false;



    }

}


document.getElementById("crime").onchange = function () {
    if (this.value == 'No' || this.value=='') {
        document.getElementById("crimetype").disabled = true;
        document.getElementById("crimeloc").disabled = true;


    } else {
        document.getElementById("crimetype").disabled = false;
        document.getElementById("crimeloc").disabled = false;



    }

}

document.getElementById("treatment").onchange = function () {
    if (this.value == 'Yes' || this.value=='') {
        document.getElementById("treatmentloc").disabled = false;


    } else {
        document.getElementById("treatmentloc").disabled = true;



    }

}
