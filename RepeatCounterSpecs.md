--Spec 1--//Same letter

Single letter in Input is counted 1 time in the Comparison_input

Input: 'c'
Comparison_input: 'c'


--Spec 2--//Different letter

Single letter in Input is counted 0 times in the Comparison_input

Input: 'c'
Comparison_input: 'a'

--Spec 3--//Same word

One word in Input is counted 1 time in Comparison_input

Input: 'cat'
Comparison_input: 'cat'

--Spec 4--//Different word

Word in Input is counted 0 times in Comparison_input

Input: 'cat'
Comparison_input: 'hat'

--Spec 5-- //Capitalization

Capitalized word in Input is counted 1 time in lowercase Comparison_input

Input: 'Cat'
Comparison_input: 'cat'

--Spec 6--//Multiple words

Input word is counted 1 time in Comparison_input string of multiple words

Input: 'cat'
Comparison_input: 'cat in a hat'

--Spec 7--//Multiple words & multiple repeats

Input word is counted 2 times in Comparison_input string of multiple words

Input: 'cat'
Comparison_input: 'cat is looking at cat in a hat'

--Spec 8--//Full word match only

Input word is counted 0 times in Comparison_input word which contains Input word

Input: 'cat'
Comparison_input: 'concatinate'
