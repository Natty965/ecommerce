#RECURSIVE IMPLEMENTATION

def hanoi_recursive(n, source, auxiliary, target):
    if n == 1:
        print(f"Move disk 1 from {source} to {target}")
        return
    hanoi_recursive(n - 1, source, target, auxiliary)
    print(f"Move disk {n} from {source} to {target}")
    hanoi_recursive(n - 1, auxiliary, source, target)

# Example usage:
n = 3  # Number of disks
hanoi_recursive(n, 'A', 'B', 'C')

#HOW IT WORKS

#Base Case: If n (number of disks) is 1, just move the disk from the source 
#peg to the target peg and return.

#Recursive Case: Otherwise:

#First, move n-1 disks from the source peg to the auxiliary peg,
 #using the target peg as a helper.

#Move the nth disk (largest disk) from the source peg to the target peg.

#Finally, move the n-1 disks from the auxiliary peg to the target peg, 
#using the source peg as a helper
