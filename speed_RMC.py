# RMC control for calculating speed and energy use

# define input constants in KMS unit
wheel_radius = 12*2.54/(2*100)
miu = 0 # rotational coefficient 
mass = 0 # total mass of the robot
gearbox_ratio = 80
drivetrain_ratio = 1

def rpm_to_velocity(rpm):
    # input rpm of the motor

    s = 2*3.14*wheel_radius
    rps = rpm/60

    # rps for the output shaft on the wheel
    rps_converted = rps/(gearbox_ratio*drivetrain_ratio) 
    velocity = rps_converted*s 
    return velocity

print(wheel_radius)
print(rpm_to_velocity(5000))

'''
12,5500 = 7.3
16,5500 = 5.4
'''

