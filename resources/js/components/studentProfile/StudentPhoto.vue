<template>
	<div class="row justify-content-end py-3 px-2">
		<div class="col-12">
			<div class="text-center float-right">
				<img class="profile-photo__image" :src="url + '/images/default-avatar.png'">

				<!-- make this div a router-link once the edit page is set up -->
				<div v-if="editable" class="profile-photo__text mt-3">
					<router-link to="/edit-profile">
						<strong>
							<i class="fas fa-user-edit"/> Edit Profile
						</strong>
					</router-link>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import { mapGetters } from 'vuex'
export default {
    data() {
        return {
            url: ""
        };
    },
	props: {
		editable: {
			default: false
        },
        user: {
            default: null
        }
	},
    computed: {
        ...mapGetters([

        ])
    },
    created() {
        this.url = window.baseUrl
    }
};
</script>

