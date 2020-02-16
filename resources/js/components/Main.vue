<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 border-bottom border-primary">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                    <a class="nav-link" v-on:click="$emit('newComponent', 'Saturday')" href="#">Saturday</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" v-on:click="$emit('newComponent', 'Monday')" href="#">Monday</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" v-on:click="$emit('newComponent', 'Feedback')" href="#">Feedback Form</a>
                    </li>
                </ul>
            </div>
        </div>
        <component v-bind:is="component" :test="test"></component>
    </div>
</template>

<script>
import Nav from './Navigation'
// import BookingIndex from './Booking/Index
import MondayBooking from './MondayBooking'
import SaturdayBooking from './SaturdayBooking'

export default {
    components: {
        Nav,
        // BookingIndex,
        MondayBooking,
        SaturdayBooking
    },
    data() {
        return {
            component: 'SaturdayBooking',
            test: undefined,
        }
    },
    mounted() {
        console.log('SaturdayBooking.')
    },
    methods: {
        updateComponent(newComponent) {
            if (newComponent === 'Saturday') {
                this.component = 'SaturdayBooking'
                this.test = this.component
            }else{
                this.component = 'MondayBooking'
                this.test = this.component
            }
        }
    }
}
</script>
