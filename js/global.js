

function showMenuContent() {
  if (!document.getElementById('site-header-menu-content').style.display || document.getElementById('site-header-menu-content').style.display === 'none') {
    document.getElementById('site-header-menu-content').style.display = 'block';
  } else {
    document.getElementById('site-header-menu-content').style.display = 'none';
  }
}

window.addEventListener('click', (e) => {
  if (!document.getElementById('site-header-menu-content').contains(e.target) && e.target.id !== 'site-header-menu') {
    document.getElementById('site-header-menu-content').style.display = 'none';
  }
});


// ----


function observer(dt, latitude, longitude) {
  this.year = getFullYear(dt);
  this.month = dt.getMonth() + 1;
  this.day = dt.getDate();
  this.hours = dt.getHours();
  this.minutes = dt.getMinutes();
  this.seconds = dt.getSeconds();
  this.latitude = 13.75;
  this.longitude = -100.5167;

  /*
  this.day       = 19;
  this.month     = 3;
  this.year       = 2007;
  this.hours     = 8;
  this.minutes   = 0;
*/
}

function planet(name, L, a, e, i, N, P) {
  this.name = name;
  this.L = L;
  this.a = a;
  this.e = e;
  this.i = i;
  this.N = N;
  this.P = P;
}

let planets = new Array();
planets[0] = new planet('โลก earth',
  new Array(100.466449, 36000.7698231),
  new Array( 1.0000001018, 0.0),
  new Array( 0.01670862, -0.000042037),
  new Array( 0.0, 0.0),
  new Array(0.0, 0.0),
  new Array(102.937348, 1.7195269));

planets[1] = new planet('ดาวพุธ mercury',
  new Array(252.250906, 149474.0722491),
  new Array(0.38709893, 0.0),
  new Array( 0.20563175, 0.000020406),
  new Array(7.004986, 0.0018215),
  new Array(48.330893, 1.1861890),
  new Array(77.456119, 1.5564775));

planets[2] = new planet('ดาวศุกร์ venus',
  new Array(181.979801, 58519.2130302),
  new Array(0.72332982, 0.0),
  new Array( 0.00677188, -0.000047766),
  new Array( 3.394662, 0.0010037),
  new Array(76.679920, 0.9011190),
  new Array(131.563707, 1.4022188));

planets[3] = new planet('ดาวอังคาร mars',
  new Array(355.433275, 19141.6964746),
  new Array(1.523679342, 0.0),
  new Array(0.09340062, 0.000090483),
  new Array(1.849726, -0.0006010),
  new Array(49.558093, 0.7720923),
  new Array(336.060234, 1.8410331));

planets[4] = new planet('ดาวพฤหัสบดี jupiter',
  new Array(34.351484, 3036.3027889),
  new Array( 5.202603191, 0.0000001913),
  new Array( 0.04849485, 0.000163244),
  new Array(1.303270, -0.0054966),
  new Array(100.464441, 1.0209550),
  new Array(14.331309, 1.6126668));

planets[5] = new planet('ดาวเสาร์ saturn',
  new Array(50.077471, 1223.5110141),
  new Array( 9.554909596, -0.0000021389),
  new Array(0.05550862, -0.000346818),
  new Array(2.488878, -0.0037363),
  new Array(113.665524, 0.8770979),
  new Array(93.056787, 1.9637694));

planets[6] = new planet('ดาวยูเรนัส uranus',
  new Array(313.2, 429.8640561),
  new Array(19.218446062, -0.0000000372),
  new Array( 0.04629590, -0.000027337),
  new Array( 0.773196, 0.0007744),
  new Array(74.005947, 0.5211258),
  new Array(173.005159, 1.4863784));

planets[7] = new planet('ดาวเนปจูน neptune',
  new Array(304.9, 219.8833092),
  new Array(30.110386869, -0.0000001663),
  new Array(0.00898809, 0.000006408),
  new Array( 1.769952, -0.0093082),
  new Array(131.784057, 1.1022057),
  new Array(48.123691, 1.4262677));

function MoonPos(obs) {
  let T = jd(obs, true) - 2451545.0;
  let L = 0.606434 + 0.03660110129 * T;
  let M = 0.374897 + 0.03629164709 * T;
  let F = 0.259091 + 0.03674819520 * T;
  let D = 0.827362 + 0.03386319198 * T;
  let N = 0.347343 - 0.00014709391 * T;
  let G = 0.993126 + 0.00273777850 * T;
  L -= Math.floor(L);
  M -= Math.floor(M);
  F -= Math.floor(F);
  D -= Math.floor(D);
  N -= Math.floor(N);
  G -= Math.floor(G);
  L *= 360; M *= 360; F *= 360;
  D *= 360; N *= 360; G *= 360;

  let V; var U; var 
 W;
  V = 0.39558 * sind(F + N) + 0.08200 * sind(F) + 0.03257 * sind(M - F - N) + 0.01092 * sind(M + F + N);
  V = V + 0.00666 * sind(M - F) - 0.00644 * sind(M + F - 2 * D + N) - 0.00331 * sind(F - 2 * D + N) - 0.00304 * sind(F - 2 * D);
  V = V - 0.00240 * sind(M - F - 2 * D - N) + 0.00226 * sind(M + F) - 0.00108 * sind(M + F - 2 * D) - 0.00079 * sind(F - N);
  V+=0.00078*sind(F+2*D+N);

  U = 1 - 0.10828 * cosd(M) - 0.01880 * cosd(M - 2 * D) - 0.01479 * cosd(2 * D) + 0.00181 * cosd(2 * M - 2 * D);
  U = U - 0.00147 * cosd(2 * M) - 0.00105 * cosd(2 * D - G) - 0.00075 * cosd(M - 2 * D + G);
  W = 0.10478 * sind(M) - 0.04105 * sind(2 * F + 2 * N) - 0.02130 * sind(M - 2 * D) - 0.01779 * sind(2 * F + N);
  W = W + 0.01774 * sind(N) + 0.00987 * sind(2 * D) - 0.00338 * sind(M - 2 * F - 2 * N) - 0.00309 * sind(G);
  W = W - 0.00190 * sind(2 * F) - 0.00144 * sind(M + N) - 0.00144 * sind(M - 2 * F - N) - 0.00113 * sind(M + 2 * F + 2 * N);
  W = W - 0.00094 * sind(M - 2 * D + G) - 0.00092 * sind(2 * M - 2 * D);

  let S = W / Math.sqrt(U - V * V);
  let A5 = L + atan2d(S, Math.sqrt(1 - S * S));
  S = V / Math.sqrt(U);
  let D5 = atan2d(S, Math.sqrt(1 - S * S));
  let R5 = 60.40974 * Math.sqrt(U);
  let ra = A5 / 15.0;
  let dec = D5;
  let mr = R5;

  // phase angle
  let pa = 180.0 - D - 6.289 * sind(F) + 2.1 * sind(M) - 1.274 * sind(2 * D - F)
         - 0.658 * sind(2 * D) - 0.214 * sind(2 * F) - 0.11 * sind(D);

  // compute altitude and azimuth
  let lst = local_sidereal(obs);
  let x = cosd(15.0 * (lst - ra)) * cosd(dec);
  let y = sind(15.0 * (lst - ra)) * cosd(dec);
  let z = sind(dec);
  // rotate so z is the local zenith
  let xhor = x * sind(obs.latitude) - z * cosd(obs.latitude);
  let yhor = y;
  let zhor = x * cosd(obs.latitude) + z * sind(obs.latitude);
  let azimuth = norm(atan2d(yhor, xhor) + 180.0); // so 0 degrees is north
  let altitude = atan2d(zhor, Math.sqrt(xhor * xhor + yhor * yhor));
  return new Array(ra, dec, mr, altitude, azimuth, norm(pa));
}

function jd(obs, actual) {
  let {year} = obs;
  let {month} = obs;
  let yy = year - Math.floor((12 - month) / 10.0);
  let mm = month + 9;
  if (mm >= 12) mm -= 12;
  let k1 = Math.floor(365.25 * (yy + 4712));
  let k2 = Math.floor(30.6 * mm + 0.5);
  let k3 = Math.floor(Math.floor((yy / 100) + 49) * 0.75) - 38;
  let jj = k1 + k2 + obs.day + 58.5;
  if (jj > 2299160) jj -= k3; // for Gregorian Calendar
  if (actual) jj += (obs.hours - 7 + (obs.minutes / 60.0) + (obs.seconds / 3600.0)) / 24;
  return jj;
}

function local_sidereal(obs) {
  let T = (jd(obs, false) - 2451545.0) / 36525;
  let sid = (100.46061837 + T * (36000.770053608 + T * (0.000387933 - T / 38710000.0))) / 15.0;
  sid += 1.00273790935 * (obs.hours + (obs.minutes - 420 + (obs.seconds / 60.0)) / 60.0);
  sid -= obs.longitude / 15.0;
  while (sid < 0) sid += 24.0;
  while (sid > 24) sid -= 24.0;
  return sid;
}

function Heliocentric(p, obs) {
  let T = (jd(obs, true) - 2451545.0) / 36525;
  let L = norm(p.L[0] + p.L[1] * T);
  let a = p.a[0] + p.a[1] * T;
  let e = p.e[0] + p.e[1] * T;
  let i = p.i[0] + p.i[1] * T;
  let N = norm(p.N[0] + p.N[1] * T);
  let P = norm(p.P[0] + p.P[1] * T);
  let M = norm(L - P);
  let w = norm(L - N - M);

  let E0 = M + (180.0 / Math.PI) * e * sind(M) * (1 + e * cosd(M));
  let E = E0 - (E0 - (180.0 / Math.PI) * e * sind(E0) - M) / (1 - e * cosd(E0));
  while (Math.abs(E0 - E) > 0.0005) {
    E0 = E;
    E = E0 - (E0 - (180.0 / Math.PI) * e * sind(E0) - M) / (1 - e * cosd(E0));
  }
  var x = a * (cosd(E) - e);
  let y = a * Math.sqrt(1 - e * e) * sind(E);
  let r = Math.sqrt(x * x + y * y);
  let r_sun = r;
  let v = norm(atan2d(y, x));
  let xe = r * (cosd(N) * cosd(v + w) - sind(N) * sind(v + w) * cosd(i));
  let ye = r * (sind(N) * cosd(v + w) + cosd(N) * sind(v + w) * cosd(i));
  let ze = r * sind(v + w) * sind(i);
  return new Array(xe, ye, ze, r_sun);
}

function EqCoor(object, station, obs) {
  // Equatorial Coordinates
  let x = object[0];
  let y = object[1];
  let z = object[2];
  let r_sun = object[3];
  let obl = 23.4393 - 3.563E-9 * (jd(obs, true) - 2451543.5);
  let x1 = x - station[0];
  let y1 = (y - station[1]) * cosd(obl) - (z - station[2]) * sind(obl);
  let z1 = (y - station[1]) * sind(obl) + (z - station[2]) * cosd(obl);
  let ra = norm(atan2d(y1, x1)) / 15.0;
  let dec = atan2d(z1, Math.sqrt(x1 * x1 + y1 * y1));
  let r = Math.sqrt(x1 * x1 + y1 * y1 + z1 * z1);
  return new Array(ra, dec, r, r_sun);
}

const idPrefix = 'sky-details-';

function setInnerHTML(suffix, text) {
  document.getElementById(`${idPrefix}${suffix}`).innerHTML = text;
}

function Calculate(obs)
{

  setInnerHTML('location', 'กรุงเทพฯ');

  // obs is a reference variable make a copy
  var obscopy = new Object();
  for (const i in obs) obscopy[i] = obs[i];
  obscopy.hours = 12;
  obscopy.minutes = 0;
  obscopy.seconds = 0;
  let sun = new Array(0.0, 0.0, 0.0, 0.0);
  let earth = Heliocentric(planets[0], obs);
  let r_es = earth[3]; // Earth-Sun distance
  // local sidereal time
  let lst = local_sidereal(obs);
  var count = 0;

  setInnerHTML('date-time', datestring(obs));

  // Calculate Sun

  let p = 0;

  var planet = Heliocentric(planets[p], obs);
  var radec = 0.0;

  radec = EqCoor(sun, earth, obs);

  var ra = radec[0];
  let rasun = ra;
  var dec = radec[1];
  var r = radec[2];
  var r_sun = radec[3];
  var x = r * cosd(15.0 * (lst - ra)) * cosd(dec);
  var y = r * sind(15.0 * (lst - ra)) * cosd(dec);
  var z = r * sind(dec);

  let pha = acosd((r_sun * r_sun + r * r - r_es * r_es) / (2 * r_sun * r)); // Phase angle
  var elong = acosd((r_es * r_es + r * r - r_sun * r_sun) / (2 * r_es * r));
  const phase = 0.5 * (1 + cosd(pha));
  let c = pha / 100.0;

  let xhor = x * sind(obs.latitude) - z * cosd(obs.latitude);
  let yhor = y;
  let zhor = x * cosd(obs.latitude) + z * sind(obs.latitude);
  var azimuth = norm(atan2d(yhor, xhor) + 180.0); // so 0 degrees is north
  var altitude = atan2d(zhor, Math.sqrt(xhor * xhor + yhor * yhor));

  // calculate the local noon values
  let lst2 = local_sidereal(obscopy);
  let earth2 = Heliocentric(planets[0], obscopy);
  radec = EqCoor(sun, earth2, obscopy);
  ra = radec[0];
  dec = radec[1];
  let UTsun = 12.0 + ra - lst2;

  if (UTsun < 0.0) UTsun += 24.0;
  if (UTsun > 24.0) UTsun -= 24.0;

  const cosLHA = (sind(-0.833) - sind(obs.latitude) * sind(dec)) / (cosd(obs.latitude) * cosd(dec));

  // Print rise/set times allowing for not today.
  const lha = acosd(cosLHA) / 15.0;
  let sunRiseTime;

  if ((UTsun - lha) < 0.0) {
    sunRiseTime = anglestring(24.0 + UTsun - lha);
  } else {
    sunRiseTime = anglestring(UTsun - lha);
  }
  setInnerHTML('sun-rise-time', sunRiseTime);

  let sunSetTime;
  if ((UTsun + lha) > 24.0) {
    sunSetTime = anglestring(UTsun + lha - 24.0);
  } else {
    sunSetTime = anglestring(UTsun + lha);
  }
  setInnerHTML('sun-set-time', sunSetTime);

	 radec = MoonPos(obs);
	 ra = radec[0];
	 var ramoon = ra;
	 let mna = (ramoon - rasun) * 29.530588853 / 24.0;
	 mna = Math.round(mna);
   if (mna < 0) { mna += 29; }

  //  setInnerHTML('moon-phase', mna);

  // Moon Calculation
  // search for moonrise and moonset
  // elh is the elevation at the hour elhdone is true if elh calculated
  let elh = new Array();
  let elhdone = new Array();
  // obs is a reference variable make a copy
  var obscopy = new Object();
  for (const i in obs) obscopy[i] = obs[i];
  obscopy.hours = 0;
  obscopy.minutes = 0;
  obscopy.seconds = 0;
  for (let i = 0; i <= 24; i++) {
    elhdone[i] = false;
  }
  moontab = MoonPos(obscopy);
  elh[0] = moontab[3];
  elhdone[0] = true;


  radec = MoonPos(obs);
  ra = radec[0];
  var ramoon = ra;
  dec = radec[1];
  let mr = radec[2];
  var altitude = radec[3];
  var azimuth = radec[4];


  // search for moonrise and set
  for (rise = 0; rise < 2; rise++) {
    found = false;
    obscopy.minutes = 0;
    obscopy.seconds = 0;
    for (i = 0; i <= 23; i++) {
      if (!elhdone[i + 1]) {
        obscopy.hours = i + 1;
        moontab = MoonPos(obscopy);
        elh[i + 1] = moontab[3];
        elhdone[i + 1] = true;
      }
      if (((rise == 0) && (elh[i] <= 0.0) && (elh[i + 1] >= 0.0))
               || ((rise == 1) && (elh[i] >= 0.0) && (elh[i + 1] <= 0.0))) {
        obscopy.hours = i;
        jfirst = 0;
        jlast = 60;
        // check the value at 30 minutes
        obscopy.minutes = 30;
        moontab = MoonPos(obscopy);
        if (rise == 0) {
          if (moontab[3] <= 0.0) jfirst = obscopy.minutes;
          if (moontab[3] > 0.0) jlast = obscopy.minutes;
        } else {
          if (moontab[3] >= 0.0) jfirst = obscopy.minutes;
          if (moontab[3] <= 0.0) jlast = obscopy.minutes;
        }
        // check the value at 15 or 45 minutes
        if (jfirst == 30) obscopy.minutes = 45;
        if (jlast == 30) obscopy.minutes = 15;
        moontab = MoonPos(obscopy);
        if (rise == 0) {
          if (moontab[3] <= 0.0) jfirst = obscopy.minutes;
          if (moontab[3] >= 0.0) jlast = obscopy.minutes;
        } else {
          if (moontab[3] >= 0.0) jfirst = obscopy.minutes;
          if (moontab[3] <= 0.0) jlast = obscopy.minutes;
        }
        // The final chop to a 5 minute interval
        obscopy.minutes = jfirst;
        for (j = 5; j < 15; j+=5) {
          obscopy.minutes+=5;
          moontab = MoonPos(obscopy);
          if (rise == 0) {
            if (moontab[3] <= 0.0) {
              jfirst = obscopy.minutes;
            }
            if (moontab[3] >= 0.0) {
              jlast = obscopy.minutes;
              break;
            }
          } else {
            if (moontab[3] >= 0.0) {
              jfirst = obscopy.minutes;
            }
            if (moontab[3] <= 0.0) {
              jlast = obscopy.minutes;
              break;
            }
          }
        }
        // now hunt through the 5 minutes selected
        for (j = jfirst; j <= jlast; j++) {
          if (j == 60) {
            obscopy.hours++;
            obscopy.minutes = 0;
          } else {
            obscopy.minutes = j;
          }
          moontab = MoonPos(obscopy);
          if (((rise == 0) && (moontab[3] >= 0.0))
                     || ((rise == 1) && (moontab[3] <= 0.0))) {
            found = true;
            setInnerHTML(`moon-${ rise === 0 ? 'rise' : 'set'}-time`, `${pad(obscopy.hours)}:${pad(obscopy.minutes)}`);
            break;
          }
        }
      }
      if (found) break;
    } // End of 24 hour search loop
    if (!found) setInnerHTML('moon-set-time', 'ไม่พบข้อมูล')
  } // End of rise/set loop

  setInnerHTML('constellation-sun', Constellation(rasun))
  setInnerHTML('constellation-moon', Constellation(ramoon))

  // evening planets

  for (p = 0; p < 6; p++) {
    var planet = Heliocentric(planets[p], obs);
    var radec = 0.0;

    if (p == 0) radec = EqCoor(sun, earth, obs);
    else radec = EqCoor(planet, earth, obs);

    var ra = radec[0];
    var dec = radec[1];
    var r = radec[2];
    var r_sun = radec[3];
    var x = r * cosd(15.0 * (lst - ra)) * cosd(dec);
    var y = r * sind(15.0 * (lst - ra)) * cosd(dec);
    var z = r * sind(dec);
    var obl = 23.4393;
    var eclong_sun;
    var elong;
    var eclong = norm(atan2d((sind(ra * 15) * cosd(obl)) + (tand(dec) * sind(obl)), cosd(ra * 15)));


    if (p == 0) {
      eclong_sun = eclong;
    } else {
        elong = norm(eclong - eclong_sun);
        if (elong > 180) elong -= 180;
			  if (elong > 12) {
				  	count += 1;
          setInnerHTML(`constellation-${planets[p].name.split(' ')[1]}`, Constellation(ra))
          setInnerHTML(`constellation-${planets[p].name.split(' ')[1]}-time`, 'หัวค่ำ')
        }
	 }
  }
	//  if (count == 0) document.write('(ไม่มี)');


  // morning planets

  var count = 0;

  for (p = 0; p < 6; p++) {
    var planet = Heliocentric(planets[p], obs);
    var radec = 0.0;

    if (p == 0) radec = EqCoor(sun, earth, obs); else radec = EqCoor(planet, earth, obs);

    var ra = radec[0];
    var dec = radec[1];
    var r = radec[2];
    var r_sun = radec[3];
    var x = r * cosd(15.0 * (lst - ra)) * cosd(dec);
    var y = r * sind(15.0 * (lst - ra)) * cosd(dec);
    var z = r * sind(dec);
    var obl = 23.4393;
    var eclong_sun;
    var elong;
    var eclong = norm(atan2d((sind(ra * 15) * cosd(obl)) + (tand(dec) * sind(obl)), cosd(ra * 15)));

    if (p == 0) {
      eclong_sun = eclong;
    } else {
			  elong = norm(eclong - eclong_sun);
			  if (elong > 180) elong -= 360; // -=180 
			  if (elong < -12) {
            count += 1;
          setInnerHTML(`constellation-${planets[p].name.split(' ')[1]}`, Constellation(ra))
          setInnerHTML(`constellation-${planets[p].name.split(' ')[1]}-time`, 'เช้ามืด')
			  }
	 }
  }
	//  if (count == 0) document.write('(ไม่มี)');

}

// Utility functions

function pad(number) {
  return number < 10 ? `0${number}` : `${number}`;
}

function datestring(now) {
  let datestr = '';
  let MonthName = new Array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม',
    'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
  //  datestr += ((now.day < 10) ? " " : " ") + now.day;
  datestr += now.day;
  datestr += ' ' + MonthName[now.month - 1];
  datestr += ' ' + (now.year + 543);
  return datestr;
}

// getFullYear returns a 4 digit year allowing for browser bugs
// the JavaScript date object works from 1900 but we assume that
// a date of 00 is actually a Y2K bug

function getFullYear(now) {
  let year = now.getYear();
  if (year == 0) { year = 2000; }
  if (year < 1900) { year+=1900 ;}
  return year;
}

// timestring returns local or ut time as a string

function timestring(now, wantut) {
  let {hours} = now;
  let {minutes} = now;
  let {seconds} = now;
  if (wantut) {
    minutes += now.tz;
    hours += Math.floor(minutes / 60.0);
    minutes = Math.floor(minutes / 60.0);
    if (hours > 24) hours -= 24;
    if (hours < 0) hours += 24;
  }
  let timestr = ((hours < 10) ? '0' : '') + hours;
  timestr += ((minutes < 10) ? ':0' : ':') + minutes;
  return timestr;
}

// anglestring return angle as degrees:minutes or time as hours:minutes

function anglestring(a) {
  let deg = Math.abs(a);
  let min = Math.round(60.0 * (deg - Math.floor(deg)));
  if (min >= 60) {
    deg += 1;
    min = 0;
  }
  let anglestr = ((Math.floor(deg) < 100) ? '' : '');
  anglestr += ((a < 0) ? '-' : '');
  anglestr += ((Math.floor(deg) < 10) ? '0' : '') + Math.floor(deg);
  anglestr += ((min < 10) ? ':0' : ':') + (min);
  return anglestr;
}

function rastring(a) {
  let hr = Math.abs(a);
  let min = Math.round(60.0 * (hr - Math.floor(hr)));
  if (min >= 60) {
    hr += 1;
    min = 0;
  }
  let rastr = ((Math.floor(hr) < 100) ? '&nbsp;' : '');
  //  rastr += ((a < 0) ? "-" : "&nbsp;");
  rastr += `${((Math.floor(hr) < 10) ? "0" : "" )+Math.floor(hr)}<sup>h</sup>`;
  rastr += `${((min < 10) ? " 0" : " " )+(min)}<sup>m</sup> `;
  return rastr;
}

function decstring(a) {
  let deg = Math.abs(a);
  let min = Math.round(60.0 * (deg - Math.floor(deg)));
  if (min >= 60) {
    deg += 1;
    min = 0;
  }
  let decstr = ((Math.floor(deg) < 100) ? '&nbsp;' : '');
  decstr += ((a < 0) ? '-' : '&nbsp;+');
  decstr += `${((Math.floor(deg) < 10) ? "0" : "" )+Math.floor(deg)}<sup>o</sup>`;
  decstr += `${((min < 10) ? " 0" : " " )+(min)}' `;
  return decstr;
}

// parsecol converts deg:min:sec or hr:min:sec to a number

function parsecol(str) {
  let col1 = str.indexOf(':');
  let col2 = str.lastIndexOf(':');
  let res = parseInt(str.substring(0, col1), 10)
        + (parseInt(str.substring(col1 + 1, col2), 10) / 60.0)
        + (parseInt(str.substring(col2 + 1, str.length), 10) / 3600.0);
  return res;
}

function norm(angle) {
  return (angle - Math.floor(angle / 360.0) * 360.0);
}

function sind(angle) {
  let a = Math.sin((angle * Math.PI) / 180.0);
  return a;
}

function cosd(angle) {
  let a = Math.cos((angle * Math.PI) / 180.0);
  return a;
}

function tand(angle) {
  let a = Math.tan((angle * Math.PI) / 180.0);
  return a;
}

function asind(c) {
  let a = (180.0 / Math.PI) * Math.asin(c);
  return a;
}

function acosd(c) {
  let a = (180.0 / Math.PI) * Math.acos(c);
  return a;
}

function atan2d(y, x) {
  let a = (180.0 / Math.PI) * Math.atan(y / x) - 180.0 * (x < 0);
  return a;
}

// Approximated Constellation

function Constellation(ra) {
  if (ra >= 0 && ra < 1.76) constel = 'ปลา';
  else if (ra >= 1.76 && ra < 3.4) constel = 'แกะ';
  else if (ra >= 3.4 && ra < 6.0) constel = 'วัว';
  else if (ra >= 6.0 && ra < 8.0) constel = 'คนคู่';
  else if (ra >= 8.0 && ra < 9.35) constel = 'ปู';
  else if (ra >= 9.35 && ra < 11.62) constel = 'สิงโต';
  else if (ra >= 11.62 && ra < 14.4) constel = 'หญิงสาว';
  else if (ra >= 14.4 && ra < 15.9) constel = 'คันชั่ง';
  else if (ra >= 15.9 && ra < 16.4) constel = 'แมงป่อง';
  else if (ra >= 16.4 && ra < 17.7) constel = 'คนแบกงู';
  else if (ra >= 17.7 && ra < 20.1) constel = 'คนยิงธนู';
  else if (ra >= 20.1 && ra < 22.0) constel = 'แพะทะเล';
  else if (ra >= 22.0 && ra < 23.5) constel = 'คนแบกหม้อน้ำ'; // will reverted to 23.5 on 1 Sep 2008
  else constel = 'ปลา';
  return (constel);
}

function PrintAlmanac() {
  let cdate = new Date();
  const latitude = 13.75;
  const longitude = -100.5167;
  let obs = new observer(cdate, latitude, longitude);

  Calculate(obs);
}

PrintAlmanac();
