<template>
	<div>
		<SignUp></SignUp>
        <router-link to="/signup"></router-link>
	</div>
</template>

<script>
import SignUp from "../../../components/authentication/SignUp";

export default {
	data() {
		return {};
	},

	components: {
		SignUp,
	}
};
</script>
