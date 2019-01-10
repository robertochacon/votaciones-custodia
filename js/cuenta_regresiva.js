const getRemainTime = deadline =>{
	let now = new Date(),
		remainTime = (new Date(deadline) - now +1000) /1000,
		remainSeconds = ('0'+Math.floor(remainTime%60)).slice(-2),
		remainMinutes = ('0'+Math.floor(remainTime/60%60)).slice(-2),
		remainHours = ('0'+Math.floor(remainTime/3600%24)).slice(-2),
		remainDays = Math.floor(remainTime/(3600*24));

	return {
		remainTime,
		remainSeconds,
		remainMinutes,
		remainHours,
		remainDays
	}
};

//console.log(getRemainTime('Feb 03 2018 22:59:21 GMT+0100'));

const countdown = (deadline, elem, finalMessage) => {
	const elementHTML = document.getElementById(elem);

	const timerUpdate = setInterval(() => {
		let t = getRemainTime(deadline);
		elementHTML.innerHTML = `
		<div class="CR">
			<p>Faltan:</p>
			<span>${t.remainDays}<div id='dorado'></br></div><p>Dias</p></span>
			<span>${t.remainHours}<div id='line'></br></div><p>HRS</p></span>
			<span>${t.remainMinutes}<div id='dorado'></br></div><p>MNS</p></span>
			<span>${t.remainSeconds}<div id='line'></br></div><p>SEG</p></span>
			<p>15 de Abril</p>
		</div>`;
	
		if (t.remainTime <= 1) {
			clearInterval(timerUpdate);
			elementHTML.innerHTML = finalMessage;
		}else{

		}

	}, 1000);
};

countdown('April 15 2018 13:00:00 GMT+0100','contador','Dios es lo mejor');