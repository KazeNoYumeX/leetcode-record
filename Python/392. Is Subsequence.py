class Solution:
    def isSubsequence(self, s: str, t: str) -> bool:
        # Convert the string t into an iterable object t
        t = iter(t)
        # Use the all() function and a generator expression to iterate through each character c in string s,
        # and check if it is in t. If it is, return True, else return False.
        return all(c in t for c in s)
