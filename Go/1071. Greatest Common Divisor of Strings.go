package main

//goland:noinspection GoUnusedFunction
func gcdOfStrings(str1, str2 string) string {
	if str1+str2 != str2+str1 {
		return ""
	}

	return str1[:gcd(len(str1), len(str2))]
}

func gcd(former int, latter int) int {
	if latter == 0 {
		return former
	}

	return gcd(latter, former%latter)
}
