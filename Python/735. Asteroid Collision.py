from typing import List


# noinspection PyMethodMayBeStatic
class Solution:
    def asteroidCollision(self, asteroids: List[int]) -> List[int]:
        stack = []

        for asteroid in asteroids:
            if asteroid > 0:
                stack.append(asteroid)
            else:
                abs_asteroid = abs(asteroid)

                while len(stack) > 0 and 0 < stack[-1] < abs_asteroid:
                    stack.pop()

                end_stack = stack[-1] if len(stack) > 0 else None
                stack_length = len(stack)

                if stack_length > 0 and end_stack == abs_asteroid:
                    stack.pop()
                elif stack_length == 0 or end_stack < 0:
                    stack.append(asteroid)

        return stack
