--Behavior 1--//Same letter

Single letter in Input is counted 1 time in the Comparison_input

Input: 'c'
Comparison_input: 'c'


--Behavior 2--//Different letter

Single letter in Input is counted 0 times in the Comparison_input

Input: 'c'
Comparison_input: 'a'

--Behavior 3--//Same word

One word in Input is counted 1 time in Comparison_input

Input: 'cat'
Comparison_input: 'cat'

--Behavior 4--//Different word

Word in Input is counted 0 times in Comparison_input

Input: 'cat'
Comparison_input: 'hat'

--Behavior 5-- //Capitalization

Capitalized word in Input is counted 1 time in lowercase Comparison_input

Input: 'Cat'
Comparison_input: 'cat'

--Behavior 6--//Multiple words

Input word is counted 1 time in Comparison_input string of multiple words

Input: 'cat'
Comparison_input: 'cat in a hat'

--Behavior 7--//Multiple words & multiple repeats

Input word is counted 2 times in Comparison_input string of multiple words

Input: 'cat'
Comparison_input: 'cat is looking at cat in a hat'

--Behavior 8--//Full word match only

Input: 'cat'
Comparison_input: 'concatinate'
