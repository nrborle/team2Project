// Sprint 1, Task TJ-8: Calculate Time Faults and apply to participant

/*Per Joan, March 2:  The faults are for every 5 second interval or part
thereof. So for your examples, a time of 4 minutes 27 seconds would incur a
penalty of 7 points, and a time of 6 minutes and 12 seconds would incur a
penalty of 3 points. ( I think that is the opposite of your description.)
*/

//apply faults to prepared speech given handbook guidelines & time in seconds

function prepTimeFaults(s){
                if              (s >= 300 && s <= 360) return 0;
                // if speech is between 5 and 6 min inclusive, no faults
                else if     (s >= 295 || s <= 365) return 1;
                else if     (s >= 290 || s <= 370) return 2;
                else if     (s >= 285 || s <= 375) return 3;
                else if     (s >= 275 || s <= 380) return 4;
                else if     (s >= 270 || s <= 385) return 5;
                else if     (s >= 265 || s <= 390) return 6;
                else return 7;
}

//apply faults to impromptu speech given handbook guidelines & time in seconds

function imprTimeFaults(s){
                if              (s >= 120 && s <= 180) return 0;
                else if     (s >= 115 || s <= 185) return 1;
                else if     (s >= 110 || s <= 190) return 2;
                else return 3;
}

//convert the two timekeepers' times given in minutes and seconds to pure seconds and then return the average

function toSeconds(min1, sec1, min2, sec2){
                return Math.round((min1*60 + sec1 + min2*60 + sec2)/2);
}
