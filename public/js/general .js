
function filterCriteria()
{
    const schoolSubjects = {
        'Math' : ['Q1', 'Q2a', 'Q2c', 'Q3a', 'Q3b', 'Q3c', 'Q4a', 'Q4b', 'Q4c', 'Q4d1', 'Q4d2', 'Q4d3'],
        'Science' : ['Q1', 'Q2', 'Q3', 'Q4'],
        'English' : ['Q1', 'Q2', 'Q3', 'Q4'],
        'Global' : ['Q1', 'Q2', 'Q3', 'Q4', 'Q4a']
    }

    let subject = document.getElementById("subject");
    subject = subject.options[subject.selectedIndex].innerHTML;
    let criteria = document.getElementById("criteria").options;

    criteria[2].disabled = true
    // for (let subj in schoolSubjects) {
    //     if (subject === subj) {
    //        for (let c in criteria) {
    //            if (schoolSubjects[subj].includes(c)) {
    //                 criteria[c].disabled = 'false';
    //            }
    //            else {
    //             criteria[c].disabled = 'true'
    //            }
    //        }
    //     }
    // }
    ;
}