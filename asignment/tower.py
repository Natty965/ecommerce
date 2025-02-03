#ITERATIVE IMPLEMENTATION
 
def hanoi_iterative(n, source, auxiliary, target):
    stack = []
    stack.append((n, source, auxiliary, target))
    while stack:
        n, source, auxiliary, target = stack.pop()
    if n == 1:
            print(f"Move disk 1 from {source} to {target}")
    else:
            stack.append((n - 1, auxiliary, source, target))
            stack.append((1, source, auxiliary, target))
            stack.append((n - 1, source, target, auxiliary))

# Example usage:
n = 3  # Number of disks
hanoi_iterative(n, 'A', 'B', 'C')


