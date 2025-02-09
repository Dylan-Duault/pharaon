import { mount } from '@vue/test-utils'
import { describe, it, expect } from 'vitest'
import Footer from '@/Components/Footer.vue'

describe('Footer Component', () => {
    it('renders correctly', () => {
        const wrapper = mount(Footer)
        expect(wrapper.exists()).toBe(true)
    })

    it('contains copyright information', () => {
        const wrapper = mount(Footer)
        const currentYear = new Date().getFullYear()
        expect(wrapper.text()).toContain(`© ${currentYear}`)
    })

    it('contains navigation links', () => {
        const wrapper = mount(Footer)
        const links = wrapper.findAll('a')
        expect(links.length).toBeGreaterThan(0)
    })
})
