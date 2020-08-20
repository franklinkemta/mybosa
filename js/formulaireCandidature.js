$(document).ready(function () {
    var stepperEl = $('.bs-stepper')[0];
    var stepper = new Stepper(stepperEl, {
      linear: false,
      animation: true
    });
    
    nextStep = function ()
    {
      stepper.next();
    }

    prevStep = function ()
    {
      stepper.previous();
    }

    toStep = function (step)
    {
      stepper.to(step);
    }

    resetStepper = function ()
    {
      stepper.reset();
    }

    destroyStepper = function ()
    {
      stepper.destroy();
    }

    stepperEl.addEventListener('show.bs-stepper', function (event) {
    // You can call preventDefault to stop the rendering of your step
    // event.preventDefault()
        console.warn('show step', event.detail.indexStep)
    })

    stepperEl.addEventListener('shown.bs-stepper', function (event) {
        console.warn('step shown')
    })
})