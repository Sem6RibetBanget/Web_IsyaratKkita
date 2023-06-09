

const webcam = new Webcam(document.getElementById('wc'));


let isPredicting = false;

async function loaadss() {
  const model = await tf.loadLayersModel('model.json');
  return model;
}



async function predict() {
  while (isPredicting) {
    const predictedClass = tf.tidy(() => {
      const img = webcam.capture();
      const predictions = model.predict(img);
      console.log(predictions);
      return predictions.as1D().argMax();
    });
    const classId = (await predictedClass.data())[0];
    var predictionText = "";
    switch(classId){
		case 0:
			predictionText = "I see A";
			break;
		case 1:
			predictionText = "I see B";
			break;
		case 2:
			predictionText = "I see C";
			break;
		case 3:
			predictionText = "I see D";
			break;
		case 4:
			predictionText = "I see E";
			break;
		case 5:
			predictionText = "I see F";
			break;
		case 6:
			predictionText = "I see G";
			break;
		case 7:
			predictionText = "I see H";
			break;
		case 8:
			predictionText = "I see I";
			break;
		case 9:
			predictionText = "I see J";
			break;
		case 10:
			predictionText = "I see K";
			break;
		case 11:
			predictionText = "I see L";
			break;
		case 12:
			predictionText = "I see M";
			break;
		case 13:
			predictionText = "I see N";
			break;
		case 14:
			predictionText = "I see O";
			break;
		case 15:
			predictionText = "I see P";
			break;
		case 16:
			predictionText = "I see Q";
			break;
		case 17:
			predictionText = "I see R";
			break;
		case 18:
			predictionText = "I see S";
			break;
		case 19:
			predictionText = "I see T";
			break;
		case 20:
			predictionText = "I see U";
			break;
		case 21:
			predictionText = "I see V";
			break;
		case 22:
			predictionText = "I see W";
			break;
		case 23:
			predictionText = "I see X";
			break;       
		case 24:
			predictionText = "I see Y";
			break;   
		case 25:
			predictionText = "I see Z";
			break;      
	}

	document.getElementById("prediction").innerText = predictionText;
			
    await tf.nextFrame()
    predictedClass.dispose();
    
  }
}



function startPredicting(){
	isPredicting = true;
	predict();
}

function stopPredicting(){
	isPredicting = false;
	predict();
}
let model;
async function init() {
  await webcam.setup();
  model = await loaadss();
  await tf.tidy(() => model.predict(webcam.capture()));
}

init();
