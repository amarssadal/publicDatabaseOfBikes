const validateForm = () => {
    let warn = 'red';
    let neutralColor = 'rgb(146, 146, 146)';
    let status = true;

    let checks = [
        [1, '.manufacturer'],
        [1, '.model'],
        [0, '.frameMaterial'],
        [0, '.forkMaterial'],
        [0, '.weight'],
        [0, '.frameSize'],
        [0, '.frontDerailleur'],
        [0, '.shifterType'],
        [0, '.shifter'],
        [1, '.chainSet'],
        [1, '.chain'],
        [1, '.cassette'],
        [0, '.bottomBracket'],
        [1, '.stem'],
        [1, '.headSet'],
        [1, '.handleBar'],
        [1, '.barTape'],
        [0, '.brakeSystem'],
        [1, '.brakeLevers'],
        [1, '.brakes'],
        [1, '.wheels'],
        [1, '.frontHub'],
        [1, '.rearHub'],
        [1, '.tyres'],
        [0, '.tube'],
        [1, '.saddle'],
        [1, '.seatPost'],
    ];

    let firstFocus = '';
    let count = 0;
    let regex = /.\!|@|#|\$|%|£|\^|\*|\(|\)|-|\+|=|'|"|:|:|\?|>|<|`/g;

    //check dropdowns
    for (check of checks) {
        if (check[0] === 0) {
            let temp = document.querySelector(check[1]);
            let temp2 = temp.options[temp.selectedIndex].value;
            if (temp2 === '') {
                if (count === 0) {
                    firstFocus = temp;
                    count++;
                }
                temp.style.borderColor = warn;
                status = false;
            } else {
                temp.style.borderColor = neutralColor;
            }
        } else if (check[0] === 1) {
            let temp = document.querySelector(check[1]);
            console.log(temp);
            if (temp.value === '' || regex.test(temp.value)) {
                if (count === 0) {
                    firstFocus = temp;
                    count++;
                }
                temp.style.borderColor = warn;
                status = false;
            } else {
                temp.style.borderColor = neutralColor;
            }
        }
    }

    
    firstFocus.focus();
    if (status === true) return true;
    return false;

}