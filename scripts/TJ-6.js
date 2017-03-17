/* This is for Sprint 1 Issue TJ-6: Convert scores to their weighted values. This is a pretty simple task
-- I've written one method that can be used for both prepared and impromptu speeches. It needs weight (the
number the converted score will be out of) to be sent as an argument. For example, for the Introduction to
the speech, the speaker should be assigned a score out of 4 for the criterion "Aroused interest and curiosity
about the topic". Since the judges' scores out of 10 need to be converted to a score out of 4, the weight in
this case would be 4. Ideally, all cells in the input form tables containing scores out of 10 would be
assigned a weight class, whose value would be an integer (e.g. 4 for the given example).
*/
function weight (score, weight){
  wtdScore = score/(10/weight);
  return wtdScore;
}
