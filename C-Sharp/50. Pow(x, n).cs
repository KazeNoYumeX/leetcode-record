using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp
{
    [SuppressMessage("ReSharper", "UnusedType.Global")]
    [SuppressMessage("ReSharper", "UnusedMember.Global")]
    public partial class Solution
    {
        public static double MyPow(double x, int n)
        {
            if (n >= 0)
            {
                return FastPow(x, n);
            }

            x = 1 / x;
            n = -n;

            return FastPow(x, n);
        }

        private static double FastPow(double x, int n)
        {
            if (n == 0)
                return 1.0;

            double half = FastPow(x, n / 2);

            if (n % 2 == 0)
                return half * half;

            return half * half * x;
        }
    }
}
