--Spec 1: Same letter

Input letter is counted 1 time in Input2

Input: 'c'
Input2: 'c'


--Spec 2: Different letter

Input letter is counted 0 times in Input2

Input: 'c'
Input2: 'a'

--Spec 3: Same word

Input word is counted 1 time in Input2
Input: 'cat'
Input2: 'cat'

--Spec 4: Different word

Input word is counted 0 times in Input2

Input: 'cat'
Input2: 'hat'

--Spec 5: Capitalization

Capitalized word in Input is counted 1 time in lowercase Input2

Input: 'Cat'
Input2: 'cat'

--Spec 6: Multiple words

Input word is counted 1 time in Input2 string of multiple words

Input: 'cat'
Input2: 'cat in a hat'

--Spec 7: Multiple words & multiple repeats

Input word is counted 2 times in Comparison_input string of multiple words

Input: 'cat'
Input2: 'cat is looking at cat in a hat'

--Spec 8: Full word match only

Input word is counted 0 times in Comparison_input word which contains Input word

Input: 'cat'
Input2: 'concatinate'
