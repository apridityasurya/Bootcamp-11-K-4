function is_username_valid(username) {
  // Huruf dari a sampai z
  var lowercaseRe = /[a-z]/g;
  
  // check panjang string dan memastikan karater yang ditemukan sama dengan panjang string
	if(username.length == 8 && username.match(lowercaseRe).length == username.length) {
    	return true;
    }
    return false;
}

function is_password_valid(password) {
  // huruf keci a sampai z
	var lowercaseRe = /[a-z]/g;
  
  // huruf besar A sampai Z
  var uppercaseRe = /[A-Z]/g;

  // angka dari 0 sampai 9
  var numberRe = /[0-9]/g;

  // karater unik _@#$ atau %
  var specialRe = /[_@#$%]/g;

  if(password.length == 8
     && lowercaseRe.test(password)
     && uppercaseRe.test(password)
     && numberRe.test(password)
     && specialRe.test(password)) {
     return true;
  }

  return false;
}

// contoh penggunaan
console.log(is_username_valid('nolnull') ? 'benar' : 'salah'); // benar
console.log(is_username_valid('userokay') ? 'benar' : 'salah'); // salah
console.log(is_password_valid('abC_456') ? 'benar' : 'salah'); // benar